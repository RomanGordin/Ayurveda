let project_folder = "dist",
   // project_folder = require('path').basename(__dirname),
   sours_folder = "src",
   fs = require('fs');

let path = {
   build: {
      sours: project_folder + "/" && project_folder + "/libs/",
      php: project_folder + "/",
      component: project_folder + "/page/",
      page: project_folder + "/page/",
      css: project_folder + "/css/",
      js: project_folder + "/js/",
      img: project_folder + "/img/",
      fonts: project_folder + "/fonts/",
   },
   src: {
      sours: sours_folder + "/{.htaccess, *.txt}" && sours_folder + "/libs/**/**/*",
      php: sours_folder + "/*.php",
      component: sours_folder + "/page/**",
      page: sours_folder + "/page/*.php",
      css: sours_folder + "/scss/**.scss",
      js: sours_folder + "/js/**.js",
      img: sours_folder + "/img/**/*.{jpg,png,svg,ico,webp}",
      fonts: sours_folder + "/fonts/**/*.ttf",
   },
   watch: {
      php: sours_folder + "/*.php",
      component: sours_folder + "/page/**/*.php",
      page: sours_folder + "/page/*.php",
      css: sours_folder + "/scss/*.scss",
      js: sours_folder + "/js/**/*.js",
      img: sours_folder + "/img/**/*.{jpg,png,svg,ico,webp}",
      fonts: sours_folder + "/fonts/**/*",
   },
   clean: "./" + project_folder + "/"
}

let { src, dest } = require('gulp'),
   gulp = require('gulp'),
   browsersync = require("browser-sync").create(),
   del = require('del'),
   scss = require('gulp-sass'),
   autoprefixer = require('gulp-autoprefixer'),
   group_media = require('gulp-group-css-media-queries'),
   clean_css = require('gulp-clean-css'),
   rename = require('gulp-rename'),
   uglify = require('gulp-uglify-es').default,
   babel = require('gulp-babel'),
   imagemin = require('gulp-imagemin'),
   gulpwebpcss = require('gulp-webpcss'),
   ttf2woff2 = require('gulp-ttf2woff2'),
   ttf2woff = require('gulp-ttf2woff'),
   fonter = require('gulp-fonter'),
   fileinclude = require('gulp-file-include');

function browserSync(params) {
   browsersync.init({
      proxy: "Ayurveda.loc",
      port: 3000,
      notify: false,
      injectChanges: true
   })
}


gulp.task('fonts' , function(){
   src(path.src.fonts)
      .pipe(ttf2woff())
      .pipe(dest(path.build.fonts));
   return src(path.src.fonts)
      .pipe(ttf2woff2())
      .pipe(dest(path.build.fonts));
})

function php() {
   return src(path.src.php)
      .pipe(fileinclude())
      .pipe(dest(path.build.php))
      .pipe(browsersync.stream())
}

function sours() {
   return src(path.src.sours)
      .pipe(fileinclude())
      .pipe(dest(path.build.sours))
      .pipe(browsersync.stream())
}

function images() {
   return src(path.src.img)
      .pipe(src(path.src.img))
      .pipe(
         imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            interlaced: true,
            optimizationLavel: 3
         })
      )
      .pipe(dest(path.build.img))
      .pipe(browsersync.stream())
}

function page() {
   return src(path.src.page)
      .pipe(fileinclude())
      .pipe(dest(path.build.page))
      .pipe(browsersync.stream())
}

function component() {
   return src(path.src.component)
      .pipe(fileinclude())
      .pipe(dest(path.build.component))
      .pipe(browsersync.stream())
}

function css() {
   return src(path.src.css)
      .pipe(
         scss({
            outputStyle: "expanded"
         })
      )
      .pipe(
         group_media()
      )
      .pipe(
         autoprefixer({
            overrideBrowserslist: ['last 15 versions', '> 1%', 'ie 8', 'ie 7'],
            cascade: true
         })
      )
      .pipe(gulpwebpcss())
      .pipe(dest(path.build.css))
      .pipe(clean_css())
      .pipe(
         rename({
            extname: ".min.css"
         })
      )
      .pipe(dest(path.build.css))
      .pipe(browsersync.stream())
}

function js() {
   return src(path.src.js)
      .pipe(fileinclude())
      .pipe(dest(path.build.js))
      .pipe(babel({
         presets: ['@babel/env']
      }))
      .pipe(
         uglify()
      )
      .pipe(
         rename({
            extname: ".min.js"
         })
      )
      .pipe(dest(path.build.js))
      .pipe(browsersync.stream())
}

function watchfiles(params) {
   gulp.watch([path.watch.php], php)
   gulp.watch([path.watch.component], component)
   gulp.watch([path.watch.css], css)
   gulp.watch([path.watch.page], page)
   gulp.watch([path.watch.js], js)
   gulp.watch([path.watch.img], images)
}


gulp.task('component', function(){
   return gulp.src([sours_folder + '/page/*.php"'])
      .pipe()
})

function clean(params) {
   return del(path.clean)
}

let build = gulp.series(clean, gulp.parallel(sours, page, css, js, php, images, component));
let watch = gulp.parallel(build, watchfiles, browserSync);

exports.images = images;
exports.js = js;
exports.page = page;
exports.component = component;
exports.sours = sours;
exports.css = css;
exports.php = php;
exports.build = build;
exports.watch = watch;
exports.default = watch;
