var gulp = require('gulp'); 
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var gutil = require('gulp-util');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var prefix = require('gulp-autoprefixer');
var livereload = require('gulp-livereload');
var coffee = require('gulp-coffee');
var raster = require('gulp-raster');


gulp.task('svg2png', function () {
    gulp.src('./images/svg/*.svg')
        .pipe(raster())
        .pipe(rename({extname: '.png'}))
        .pipe(gulp.dest('./images/png/'));

});



gulp.task('sass', function() {
    gulp.src('./scss/style.scss')
        .pipe(sass({sourceComments: 'map'}))
        // .pipe(prefix("last 2 version", "ie 8", "ie 7"))
        .pipe(prefix('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest('./css/dev/'));
        // .pipe(gulp.dest('./css/dist/'));
});


gulp.task('coffee', function() {
    gulp.src('./scripts/coffee/app.coffee')
      .pipe(coffee({bare: true}).on('error', gutil.log))
      .pipe(gulp.dest('./scripts/js/'))
        
});

gulp.task('jshint', function() {
  gulp.src('./scripts/js/app.js')
    .pipe(jshint())
    .pipe(jshint.reporter(stylish));
});



gulp.task('scripts', function() {
    
    gulp.src([  './bower_components/angular-sanitize/angular-sanitize.js', 
                './bower_components/fastclick/lib/fastclick.js', 
                './bower_components/malihu-custom-scrollbar-plugin-bower/jquery.mCustomScrollbar.concat.min.js', 
                './bower_components/swiper/dist/idangerous.swiper.js', 
                './bower_components/swiper-smooth-progress/dist/idangerous.swiper.progress.js', 
                './scripts/plugins/picturefill.js', 
                './scripts/js/app.js'])

        .pipe(concat('all.js'))
        .pipe(rename('app.concat.js'))
        .pipe(gulp.dest('./scripts/js/dev/'))
        .pipe(uglify())
        .pipe(rename('app.min.js'))
        .pipe(gulp.dest('./scripts/js/dist/'));
});






gulp.task('watch', function() {
    var server = livereload();
    gulp.watch('./scripts/coffee/app.coffee', ['coffee', 'jshint', 'scripts']).on('change', function(file) {
          server.changed(file.path);
        });
    // gulp.watch('./scripts/js/app.js', ['jshint', 'scripts']).on('change', function(file) {
    //       server.changed(file.path);
    //     });

    gulp.watch('./scss/**/*.scss', ['sass']).on('change', function(file) {
          server.changed(file.path);
        });
    gulp.watch('./**/*.php').on('change', function(file) {
          server.changed(file.path);
        });
    
});

gulp.task('default', ['sass', 'coffee', 'watch']);