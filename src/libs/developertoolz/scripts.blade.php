<script>
    function request_type(e,needle_param=null){
        return (e && e.type)?e.type:null;
    }
    //Запрос на сервер
    function get_data(url,method,callback = null, params = null,form=null){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                if(callback){
                    let data;
                    try {
                        data = JSON.parse(xhr.responseText);
                    } catch (e) {
                        data = (xhr.responseText);
                    }
                    callback(data);
                }
            }else{
                if(xhr.status && xhr.status==419){
                    return window.location.reload();
                }
            }
        };

        var sending_formData = new FormData();
        var uri_str = (~url.indexOf('?'))?'&':'?';

        if(params){
            for(let i in params){
                sending_formData.append(i,params[i]);
                uri_str+=i+"="+params[i]+"&";
            }
        }

        if(form){sending_formData = new FormData(form);}

        if(method=='post'){
            xhr.open(method, url);
            //Дообавление csrf-токена
            xhr.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
            //Отправляем
            xhr.send(sending_formData);
        }else{
            xhr.open(method, url+uri_str);
            xhr.send();
        }
    }

    function set_disable_button(button,param = {disabled:true,cursor:"no-drop",opacity:0.5}){
        if(!button){return null;}

        for(let i in param){
            button.setAttribute(i,param[i]);
            button.style[i] = param[i];
        }
        return button;
    }

    function set_enable_button(button,param = {"disabled":false,cursor:"pointer","opacity":1}){
        if(!button){return null;}

        for(let i in param){
            button.style[i] = param[i];
            if(!param[i]){
                button.removeAttribute(i);
            }else{
                button.setAttribute(i,param[i]);
            }
        }
        return button;
    }

    //Запрос с выводом результата
    const ajax_Send = (formData,action,callback=null,after_success_callback=null,after_error_callback=null,show_message=true) => {
        var csrf = document.querySelector('meta[name="csrf-token"]');
        if(csrf){
            csrf = csrf.getAttribute('content');
        }else{
            // console.log('Предупреждение:');
            // console.log('отсутствует csrf-токен');
        }
        fetch(action, {
            method: 'POST',
            headers: {
                "X-CSRF-TOKEN":csrf
                // 'Content-Type': 'application/x-www-form-urlencoded', // отправляемые данные
            },
            body: formData
        })
            .then(response => {
                response = response.json().then(e=>{
                    const func = e.type;
                    if(callback){callback(e);}
                    // window[func](e.text);
                    after_success_callback = after_success_callback?after_success_callback:function(){};
                    after_error_callback = after_error_callback?after_error_callback:function(){};

                    if(show_message){
                        if(window[func]){
                            if(func=="success"){
                                return window[func](e.text,after_success_callback(e));
                            }
                            if(func=="error"){
                                return window[func](e.text,after_error_callback(e));
                            }
                        }
                        console.error(`Функция "${func}" не найдена`)
                    }


                    // return window[func]?window[func](e.text,after_success_callback):console.log(`Функция "${func}" не найдена`);
                });
            })
            .catch(error => {
                error("Произошла неведомая ошибка");
                console.error(error)
            })
    };

    //Вызывает отображение success/error с параметром text
    function win_func(e = null,callback=null){
        if(e && e.type && e.text){
            const func = e.type;
            if(window[func]){
                if(func=="success"){
                    return window[func](e.text,callback);
                }
                if(func=="error"){
                    return window[func](e.text,callback);
                }
            }
        }
    }

    //Поиск ролителя с нужным селектором
    function getNeedleSelectorOfThisElAndParent(elem=false,selector="",lvl=5){
        if(!elem){return false;}
        if(!selector || selector==""){return false;}
        if(elem.matches(selector)){return elem}
        var i=0;
        var par = elem;
        while(i<lvl){
            par = par.parentNode;
            if(!par){return undefined;}
            if(par.tagName=='HTML'){return undefined;}
            if(par.matches(selector)){return par}
            i++;
        }
        return undefined;
    }
    //То же самое
    Element.prototype.getNeedleSelectorOfThisElAndParent = function(selector="",lvl=5) {
        return getNeedleSelectorOfThisElAndParent(this,selector,lvl);
    };

    //Установка курсора в инпуте в конец
    function setCursorPosition(pos, elem) {
        elem.focus();
        if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
        else if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select()
        }
    }

    //Маска номера телефона
    function mask(event) {
        var matrix = "+7 (___) ___-__-__",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, "");
        if (def.length >= val.length) val = def;
        this.value = matrix.replace(/./g, function (a) {
            return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
        });
        // console.log(this.value);
        if (event.type == "blur") {
            if (this.value.length == 2) this.value = ""
        } else setCursorPosition(this.value.length, this)
    };

    function set_phone_mask(elem){
        if(!elem){return false;}
        elem.addEventListener("input", mask, false);
        elem.addEventListener("focus", mask, false);
        elem.addEventListener("blur", mask, false);
    }

    //Вешаем маску на блок с номером телефона:
    window.addEventListener("load", function () {
        document.querySelectorAll("input.phone").forEach(function(el){
            set_phone_mask(el);
        });
    });

    //Случайная строка произвольной длины
    function randomString(len) {
        var rnd = '';
        while (rnd.length < len)
            rnd += Math.random().toString(36).substring(2);
        return rnd.substring(0, len);
    }

    //Создадим элемент в родителе
    function create_element(tag,parent,append=true){
        let elem = document.createElement(tag);

        if(append){parent.appendChild(elem);}
        else{parent.insertBefore(elem,parent.children[0]);}
        return elem;
    }

    //Мотаем страницу вверх:
    function ScrollUp(){
        var t,s;
        s=document.body.scrollTop||window.pageYOffset;
        t=setInterval(function(){if(s>0)window.scroll(0,s-=5);else clearInterval(t)},1);
    }

    //Сообщения для пользователя
    function message(text,type="success",timer=1500,callback = null){
        Swal.fire({
            position: 'top-center',
            icon: type,
            title: text,
            showConfirmButton: false,
            timer: timer
        }).then((result) => {
            if(callback){
                callback(result.value);
            }
        });
    }
    function success_message(text){
        Swal.fire(
            'Успешно!',
            text,
            'success'
        );
    }
    function error(text="Это либо еще не сделано, либо не работет",callback=null){
        if(callback){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: text,
                footer: '<a href="https://www.anekdot.ru/tags/%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82" target="_blank">Что теперь делать?</a>'
            }).then(callback());
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: text,
                footer: '<a href="https://www.anekdot.ru/tags/%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82" target="_blank">Что теперь делать?</a>'
            })
        }

    }
    function success(text,callback=null,callback_param=null){
        if(callback){
            Swal.fire(
                'Успешно!',
                text,
                'success'
            ).then(function(){callback(callback_param)});
        }else{
            Swal.fire(
                'Успешно!',
                text,
                'success'
            );
        }

    }
    function confirm(confirm_text="",success_text="",callback = null){
        Swal.fire({
            title: 'Подтверждение',
            text: confirm_text,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Отмена',
            confirmButtonText: 'Да'
        }).then((result) => {
            if (result.value) {
                if(callback){
                    callback(result.value);
                }
                if(success_text){
                    Swal.fire(
                        'Успешно!',
                        success_text,
                        'success'
                    );
                }
            }
        });

    }

    //Запрос на модалку:
    function get_modal(modal_name=null){
        if(event && event.preventDefault()){event.preventDefault();}
        if(!modal_name){return false;}

        document.querySelectorAll('div[data_modal="'+modal_name+'"]').forEach(function(el){el.remove();});

        get_data("/modal","post",function(e){
                let this_modal_block = create_element("div",document.querySelector("body"));
                this_modal_block.innerHTML = e;
                this_modal_block.setAttribute("data_modal",modal_name);

                let this_modal_script_html = this_modal_block.querySelector("script");

                if(this_modal_script_html){
                    this_modal_script_html = this_modal_script_html.innerHTML;
                    this_modal_block.querySelector("script").remove();

                    let this_modal_script = create_element("script",this_modal_block);
                    this_modal_script.innerHTML = this_modal_script_html;
                }
                $("#"+modal_name).modal("show");
            },
            {
                "func":"get_modal",
                "modal":modal_name
            }
        )
    }

    //Валидация номеров телефона на форме
    function form_phones_validate(form=null) {
        if(!form){return false;}
        let result = true;
        form.querySelectorAll("input.phone").forEach(function(el){
            if(el.value && el.value.length==18){
                el.classList.remove("is-invalid");
            }else{
                el.classList.add("is-invalid");
                result = false;
            }
        });
        return result;
    }

    //сортировка массива объектов по возрастанию значения поля:
    //# users.sort(byField('age'));
    function byField_to_up(field) {
        return (a, b) => a[field] > b[field] ? 1 : -1;
    }
    //По убыванию
    function byField_to_down(field) {
        return (a, b) => a[field] < b[field] ? 1 : -1;
    }
    //Установка одинаковой (максимальной) высоты у блоков с определнным селектором
    function set_same_height(selectors){
        let max_height = 0;
        document.querySelectorAll(selectors).forEach(function(el){
            if(parseInt(el.offsetHeight)>max_height){max_height = el.offsetHeight;}
        });
        document.querySelectorAll(selectors).forEach(function(el){
            el.style.height = max_height+"px";
        });
    }

    //Случайное число из диапазона:
    function random_int_form_diapazon(min=0,max=100){
        return parseInt(min + Math.random() * (max - min));
    }

    //Получить ГЕТ параметр
    function get_GET_parament(name){

        var params = window.location.href.split("?");
        if(!params[1]){return null;}
        params = params[1];
        params = params.split('&')
            .reduce(
                function(p,e){
                    var a = e.split('=');
                    p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                    return p;
                },
                {}
            );
        return ( params[name]);
    }


    //Наличие подстроки в строке:
    function isset_substr_in_string(str=null,substr=null){
        if(!str){return false;}
        if(!substr){return false;}

        return ~str.indexOf(substr)?true:false;
    }

    //расставляем класс "active" каждому элементу nav li, в который входит элемент a со ссылкой, входящей в текущую навигацию:
    window.addEventListener("load",function(){
        let path = window.location.pathname;
        document.querySelectorAll("nav li a").forEach(function(el){
            let href = el.getAttribute("href");
            // console.log(href);
            if(href && href.length>1 && isset_substr_in_string(path,href)){
                // console.log(el);
                let par = el.getNeedleSelectorOfThisElAndParent("li");

                if(par){par.classList.add("active");}
            }
        });
    });

    //Добавляем скрытое поле на форму, если поля с таким именем нет:
    function add_hidden_input_to_form(this_form=null,name=null){
        if(!name){return null;}
        if(!this_form){return null;}

        let input = this_form.querySelector('input[name="'+name+'"]');

        if(!input){
            input = create_element("input",this_form);
            input.name = name;
            input.classList.add("hidden");
            input.setAttribute("hidden",true);
        }

        return input;
    }

    //Количество свойств объекта:
    function obj_count(obj){
        let count = 0;
        for(let i in obj){count++;}
        return count;
    }
</script>
