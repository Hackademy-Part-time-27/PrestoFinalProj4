<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
    <x-navbar2/>

    <div>
        {{ $slot }}
        
    </div>
    
    <x-footer/>
<script>
    let title =localStorage.getItem('data-theme')
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
        }else if(title=='dark') {
            localStorage.setItem('data-theme','light')
            title=localStorage.getItem('data-theme')
                setAttrribute ();
        }
    }
</script>
</body>
</html>