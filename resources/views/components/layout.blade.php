<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/js/app.js','resources/css/app.css', 'resources/scss/app.scss', 'resources/scss/pagination.scss', 'resources/scss/variables.scss'])
    <!-- Vari Font di google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <!-- cdn FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- secondo font Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <!-- Icone Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
    <x-navbar2/>

    <div class="min-vh-100 h-custom">
        {{ $slot }}  
    </div>
    
    <x-footer/>
<script>

    let title =localStorage.getItem('data-theme')
    let divFooter = document.getElementById('footerWave');
    
    setAttrribute()

    function setAttrribute(){
        if(title=='dark'){
            var el=document.documentElement;
            el.setAttribute('data-theme','dark')
        }else{
        var el=document.documentElement;
        el.setAttribute('data-theme', 'light')
        }
    }

    function changeMode(){
        if(title=='light'){
            localStorage.setItem('data-theme','dark')
            title=localStorage.getItem('data-theme')
                setAttrribute();
                if(title=='dark'){
                    document.getElementById('black').style.display='block';
                    document.getElementById('white').style.display='none'
                }else{
                    document.getElementById('black').style.display='none';
                    document.getElementById('white').style.display='block'
                }
        }else if(title=='dark') {
            localStorage.setItem('data-theme','light')
            title=localStorage.getItem('data-theme')
                setAttrribute ();
                if(title=='dark'){
                    divFooter.innerHTML= ` <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(132% + 1.3px); height: 100px;">
                        <path d="M0,0V46.29c47.31,21.91,98.33,31.13,148.17,34,75.93,4.72,147.62-16.84,223.12-29.52C453.11,33.9,532.63,47.9,607,53.64c68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" opacity=".25" style="fill: #1D2125;"></path>
                        <path d="M0,0V15.81C47.31,35,98.33,42.82,148.17,45.69c75.93,4.72,147.62-16.84,223.12-29.52,81.82-14.63,161.34-1.58,235.71,4.16,68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" opacity=".5" style="fill: #1D2125;"></path>
                        <path d="M0,0V5.63C47.31,24.91,98.33,31.13,148.17,34c75.93,4.72,147.62-16.84,223.12-29.52C453.11,21.9,532.63,35.9,607,41.64c68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" style="fill: #1D2125;"></path>
                    </svg>`
                }else{
                    divFooter.innetHTML= `<svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(132% + 1.3px); height: 100px;">
                        <path d="M0,0V46.29c47.31,21.91,98.33,31.13,148.17,34,75.93,4.72,147.62-16.84,223.12-29.52C453.11,33.9,532.63,47.9,607,53.64c68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" opacity=".25" style="fill: #ffffff;"></path>
                        <path d="M0,0V15.81C47.31,35,98.33,42.82,148.17,45.69c75.93,4.72,147.62-16.84,223.12-29.52,81.82-14.63,161.34-1.58,235.71,4.16,68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" opacity=".5" style="fill: #ffffff;"></path>
                        <path d="M0,0V5.63C47.31,24.91,98.33,31.13,148.17,34c75.93,4.72,147.62-16.84,223.12-29.52C453.11,21.9,532.63,35.9,607,41.64c68.17,5.29,136.23-9.3,200-24.3,87.22-20.72,172.28-46.21,261-51.8,50.24-3.23,99.71,1.27,148.17,12.58,48.88,11.41,95.9,29.35,142.14,42.27,30.43,8.38,62.77,16.2,94.68,20.22V0Z" style="fill: #ffffff;"></path>
                    </svg>`
                }
        }
    }

    

    let windows = window.location.href
    const modal = document.getElementById('modal')

    if(windows=="http://127.0.0.1:8000/"){
        modal.style.animation=' bump 1s linear';
        setTimeout(()=> {
            modal.style.animation='myAnim 1s ease 0s 1 normal forwards';
        }, 1000)
        modal.style.top='200px';

    }

    function closeModal(){
        modal.style.display='none';
    }

    

 

    
</script>
</body>
</html>