var gulp  = require('gulp'),
    util  = require('gulp-util'),
    compass  = require('gulp-compass'),
    concat = require('gulp-concat'),
    uglifyjs = require('gulp-uglifyjs'),
    watch = require('gulp-watch'),
    cleanCSS = require('gulp-clean-css'),
    plumber = require('gulp-plumber'),
    livereload = require('gulp-livereload');

var outputDir = 'dist/';

gulp.task('compass', function() {
	gulp.src(['sass/*.scss', 'sass/modules/*.scss'])
    	.pipe(plumber())
		.pipe(compass({
			css: outputDir + '/css',
			sass: 'sass'
		}))
		.pipe(cleanCSS())
		.pipe(gulp.dest(outputDir + '/css'))
      	// .pipe(plugins.livereload(server));
      	.pipe(livereload());
});

gulp.task('concat', function() {
	// gulp.src(['bower_components/jquery/dist/jquery.min.js', 'bower_components/swiper/dist/js/swiper.jquery.min.js', './js/*.js']) 
	gulp.src(['node_modules/swiper/js/swiper.min.js', 'node_modules/swiper/dist/js/swiper.min.js', './js/*.js'])
    	.pipe(plumber())
		.pipe(concat('all.js'))
		.pipe(gulp.dest(outputDir + '/js'))
		// .pipe(plugins.livereload(server));
		.pipe(livereload());
});

gulp.task('uglify', function() {
	gulp.src(['dist/js/all.js'])
    	.pipe(plumber())
		.pipe(uglifyjs('all.min.js'))
		.pipe(gulp.dest(outputDir + '/js'))
		.pipe(livereload());
});

gulp.task('watch', function() {
	livereload.listen();
	gulp.watch('js/*.js', ['concat', 'uglify']);
	gulp.watch(['sass/*.scss', 'sass/modules/*.scss'], ['compass']);
	gulp.watch( './**/*.php' ).on( 'change', function( file ) {
		// reload browser whenever any PHP file changes
		livereload.changed( file );
	});
});

gulp.task('default', ['compass', 'concat', 'uglify', 'watch']);