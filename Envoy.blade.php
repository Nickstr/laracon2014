@servers(['web' => 'beanstalk@heybigname.com'])

@task('deploy', ['on' => 'web'])
    cd /usr/share/nginx/laraconeu/public/laracon2014
    git pull
    gulp
@endtask
