<!DOCTYPE HTML>
<HTML lang="de">
<HEAD>
    <TITLE>PiBytes</TITLE>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>  
    <script src="jquery.js"></script>
</HEAD>
<BODY>
    <HEADER class="container">
        <div id="logoWrapper">
            <div id="logo"></div>
        </div>
    </HEADER>
    <section class="container">
            <div class="flexWrapper">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Demo" command="demo">  
                <input class="button btn btn-lg btn-primary" type="submit"  value="Grüne LED" command="green_switch">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Rote LED" command="red_switch">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Weiße LED" command="white_switch">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Blaue LED" command="blue_switch">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Gelbe LED" command="yellow_switch">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Alle LEDs an" command="on">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Alle LEDs aus" command="off">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Init" command="init">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Zufällige LED" command="random_led">
                <input class="button btn btn-lg btn-primary" type="submit"  value="Wechsle alle LEDs" command="toggle">
            </div>
    </section>
</BODY>
</HTML>