<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title></title>

    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<style>





    .container{
        min-height:400px;
        position:relative;
    }
    a{
        text-decoration:none;
    }
    .brdrs div{
        position:absolute;
    }

    .brdrs .options_menu{
        opacity:0.0;
        background: none;
        top: 40px;
        left: 20px;

        -webkit-transition: opacity 0.2s, top 0.2s; /* Safari */
        transition: opacity 0.2s, top 0.2s;
    }

    .brdrs .options_menu.active{
        opacity:1.0;
        top: 20px;
        background: none !important;
    }

    .brdrs .options_menu a:hover{
        top:2px;
    }
    .brdrs .options_menu a{
        position:relative;
        display: inline-block;
        width: 30px;
        line-height: 30px;
        text-align: center;
        color: white;
        margin-left: 4px;
        border-radius: 6px;
        box-shadow: 0px 1px 3px #0000003d;
        top:0px;

        -webkit-transition: top 0.2s; /* Safari */
        transition: top 0.2s;
    }


    .brdrs .addbelow{
        line-height: 35px;
        padding-bottom: 0px;
        width: 35px;
        bottom: -18px;
        left: 50%;
        margin-left: -25px;
        position: absolute;
        text-align: center;
        font-size: 25px;
        color: white;
        border-radius: 50%;
        z-index: 10;
        font-weight: bold;
    }
    .brdrs .top{
        left:0px;
        right:0px;
        top:0px;
        height:10px;
        border-top:2px solid;
    }
    .brdrs .right{
        right:0px;
        top:0px;
        bottom:0px;
        width:10px;
        border-right:2px solid;
    }
    .brdrs .bottom{
        left:0px;
        right:0px;
        bottom:0px;
        height:10px;
        border-bottom:2px solid;
    }
    .brdrs .left{
        left:0px;
        top:0px;
        bottom:0px;
        width:10px;
        border-left:2px solid;
    }

    .sb_section{
        position:relative;
        min-height:200px;
    }

    .sb_section .brdrs div{
        border-color: orange;
    }
    .sb_section .brdrs div.active{
        background:rgba(255, 165, 0, 0.4);
    }
    .sb_section .brdrs a{
        background: orange;
    }

    .container .brdrs div{
        border-color: midnightblue;
    }
    .container .brdrs div.active{
        background:rgba(25, 25, 112, 0.4);
    }
    .container .brdrs a{
        background: midnightblue;
    }
</style>

<style>.sbid_0{background:white;min-height:200px;}</style>
<div class="sb_section sbid_0 is_resizable">
    <div class="container is_resizable"></div>
</div>

<script src="/js/app.js"></script>
<script>
/*return $(
    "<div class='brdrs'>"+
        "<div class='brdr top'></div>"+
        "<div class='brdr right'></div>"+
        "<div class='brdr bottom'></div>"+
        "<div class='brdr left'></div>"+
        "<a class='addbelow' href='#'>+</a>"+
        this.hoverOptionsMenu() +
    "</div>");
};

this.hoverOptionsMenu = function(){
    return"<div class='options_menu'>" +
        "<a href='#'><span class='glyphicon glyphicon-cog' aria-hidden='true'></span></a>" +
        "<a href='#'><span class='glyphicon glyphicon-move' aria-hidden='true'></span></a>" +
        "<a href='#'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>" +
    "</div>";
};
*/
</script>



</body>
</html>