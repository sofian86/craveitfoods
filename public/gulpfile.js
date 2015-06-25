var gulp = require('gulp');
var sass = require('gulp-sass');

//Sass Task
gulp.task('styles', function(){
	gulp.src('/public/scss/*.scss')
		.pipe(sass({
			errLogToConsole: true
		}))
		.pipe(gulp.dest('/public/css/'))

});

//watch task
gulp.task('default', function(){
	gulp.watch('/public/scss/*.scss', ['styles']);
});

