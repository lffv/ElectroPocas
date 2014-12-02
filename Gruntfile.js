
module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    
    // Before generating any new files, remove any previously-created files.
    clean: {
      canvas: ['deploy/*'],
    },
    rename: {
        renameActDb: {
            src: 'deploy/app/Config/database.php',
            dest: 'deploy/app/Config/database.offline.php'
        },
        renameOnlineDb: {
            src: 'deploy/app/Config/database.online.php',
            dest: 'deploy/app/Config/database.php'
        }
    },
    // COPY TASK - copies files and folders to deploy dir
    copy: {
      canvas: {
        files: [
          {expand: true, src: ['**', '.*'], dest: 'deploy/'},
          {src: ['app/.htaccess'], dest: '.htaccess'},
          {src: ['app/webroot/.htaccess'], dest: 'deploy/app/webroot/.htaccess'},
          {expand: true, cwd: 'lib', src: ['**'], dest: 'deploy/lib/'},
          {expand: true, cwd: 'plugins', src: ['**'], dest: 'deploy/plugins/'},
          {expand: true, cwd: 'vendors', src: ['**'], dest: 'deploy/vendors/'},
        ]
      },
      options: { dot: true },
    },
    compress: {
      canvas: {
        options: {
          archive: 'zip/ElectroPocas.zip'
        },
        files: [
          {expand: true, cwd: 'deploy/', src: ['**', '.*'], dest: 'deploy/'}, 
          {expand: true, cwd: 'deploy/app/', src: ['.*'], dest: 'deploy/app'}, 
          {expand: true, cwd: 'deploy/app/webroot', src: ['.*'], dest: 'deploy/app/webroot'}, 
        ]
      }
    },
    'string-replace': {
      dist: {
        files: {
          'deploy/.htaccess': 'deploy/.htaccess',
          'deploy/app/.htaccess': 'deploy/app/.htaccess',
          'deploy/app/webroot/.htaccess': 'deploy/app/webroot/.htaccess',
        },
        options: {
          replacements: [{
            pattern: '#deployRuleBase',
            replacement: 'RewriteBase /'
          },
          {
            pattern: '#deployRuleApp',
            replacement: 'RewriteBase /app/'
          },
          {
            pattern: '#deployRuleWebroot',
            replacement: 'RewriteBase /app/webroot'
          }]
        }
      }
    },
    // FTP TASK - uploads application via FTP
    'ftp-deploy': {
      canvas: {
        auth: {
          host: 'ftp.onlinux-pt.setupdns.net',
          port: 21,
          authKey: 'key1'
        },
        src: 'zip/',
        dest: '/public/test/test'
      },
    },
  });
  
  // LOAD TASKS
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-rename');
  grunt.loadNpmTasks('grunt-string-replace');
  grunt.loadNpmTasks('grunt-ftp-deploy');
  grunt.loadNpmTasks('grunt-contrib-compress');

  
  grunt.registerTask('deploy-canvas-ftp', [
    'clean:canvas',
    'copy:canvas', 
    //'string-replace',
    //'rename:renameActDb',
    //'rename:renameOnlineDb',
    'compress:canvas',
    'ftp-deploy:canvas',
  ]);
  //grunt.registerTask('deploy-webapp', ['clean:webapp', 'copy:webapp', 'replace:webapp', 'ftp-deploy:webapp']);
};

