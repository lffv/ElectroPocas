module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    
    
    // Before generating any new files, remove any previously-created files.
    clean: {
      canvas: ['deploy/canvas/*'],
    },
    // COPY TASK - copies files and folders to deploy dir
    copy: {
      canvas: {
        files: [
          {expand: true, cwd: 'app', src: ['**'], dest: 'deploy/canvas/app/'},
          {src: ['app/.htaccess'], dest: 'deploy/canvas/app/.htaccess'},
          {src: ['app/webroot/.htaccess'], dest: 'deploy/canvas/app/webroot/.htaccess'},
          {expand: true, cwd: 'lib', src: ['**'], dest: 'deploy/canvas/lib/'},
          {expand: true, cwd: 'plugins', src: ['**'], dest: 'deploy/canvas/plugins/'},
          {expand: true, cwd: 'vendors', src: ['**'], dest: 'deploy/canvas/vendors/'},
          {src: ['.htaccess'], dest: 'deploy/canvas/.htaccess'},
          {src: ['index.php'], dest: 'deploy/canvas/index.php'},
        ]
      }
    },
    // REPLACE TASK - replace some configuration vars in deploy app files
    replace: {
      canvas: {
        src: ['deploy/webapp/public/js/config.js'],             
        overwrite: true,              
        replacements: [{ 
          from: 'http://uaum/api',
          to: 'http://uaum.blleb.com/api' 
        }]
      }
    },
    // FTP TASK - uploads application via FTP
    'ftp-deploy': {
      canvas: {
        auth: {
          host: 'festival.blleb.com',
          port: 21,
          authKey: 'key1'
        },
        src: 'deploy/canvas',
        dest: 'canvas',
        exclusions: ['path/to/source/folder/**/.DS_Store', 'path/to/source/folder/**/Thumbs.db', 'dist/tmp']
      },
      canvas_app: {
        auth: {
          host: 'festival.blleb.com',
          port: 21,
          authKey: 'key1'
        },
        src: 'deploy/canvas/app',
        dest: 'canvas/app',
        exclusions: ['path/to/source/folder/**/.DS_Store', 'path/to/source/folder/**/Thumbs.db', 'dist/tmp']
      },
    },
    'useminPrepare': {
      html: 'webapp/index.html',
      options:{
        dest: 'deploy/webapp'  
      }
    },
    usemin: {
      html: ['deploy/webapp/index.html']
    }
  });
  
  // LOAD TASKS
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-internal');
  grunt.loadNpmTasks('grunt-text-replace');
  grunt.loadNpmTasks('grunt-ftp-deploy');
  grunt.loadNpmTasks('grunt-usemin');

  // AVAILABLE TASKS TO RUN ON CLIs
  grunt.registerTask('deploy-canvas-noftp', [
    'clean:canvas', 
    'copy:canvas', 
    'replace:canvas', 
    //'useminPrepare',
    //'concat',
    //'cssmin',
    //'uglify',
    //'usemin'
    ]);
  grunt.registerTask('deploy-canvas-ftp', [
    'clean:canvas', 
    'copy:canvas', 
    'replace:canvas',
    'ftp-deploy:canvas' 
    //'useminPrepare',
    //'concat',
    //'cssmin',
    //'uglify',
    //'usemin'
  ]);
  grunt.registerTask('deploy-canvas-app-ftp', [
    'clean:canvas', 
    'copy:canvas', 
    'replace:canvas',
    'ftp-deploy:canvas_app' 
    //'useminPrepare',
    //'concat',
    //'cssmin',
    //'uglify',
    //'usemin'
  ]);
  grunt.registerTask('ftp-canvas-app', [
    'ftp-deploy:canvas_app' 
  ]);
  //grunt.registerTask('deploy-webapp', ['clean:webapp', 'copy:webapp', 'replace:webapp', 'ftp-deploy:webapp']);
};

// TODO:
//change config/core to no debug
// change db access
