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

<style>.sbid_0{background:#grey;height:400px;}</style>
<div class="sbid_0 sb_section is_resizable">
    <div class="container is_resizable"></div>
</div>

<script src="/js/app.js"></script>
<script>



$(function(){

    var sections = JSON.parse(
            '[' +
            '{"id":1,"type":"default","styles":{"background":"#ff8f00","height":"600px"},"containers":[{"type":"default","styles":{"background":"green"},"segments":"4_4_4"}]},' +
            '{"id":2,"type":"default","styles":{"background":"white","min-height":"500px"},"containers":[{"type":"default","styles":{"background":"green"},"segments":"4_4_4"}]},' +
            '{"id":3,"type":"default","styles":{"background":"grey"},"containers":[{"type":"default","styles":{"background":"green"},"segments":"4_4_4"}]}' +
            ']'
    );

    var mysegments = [];
    $.each(sections,function(index, section){
        mysegments.push(new pageElement(section.id,'sb_section',section.type, section.styles, section.containers).initialize());
    });

    function pageElement(id,element, type, styles, subelements){

        this.element = element;
        this.id = id;
        this.type = type;
        this.styles = styles;


        this.subelements = subelements;

        this.initialize = function (){
            this.createSubElements();
            this.render();
        };

        this.createSubElements = function(){
            //Create subelements.
        };

        this.getstyles = function(){
            var style = "<style>";

            style = style + '.sbid_' + this.id + '{';
            for(key in this.styles){
                //console.log(key);
                style = style + key + ":" + this.styles[key] + ";";
            }

            style = style + "}";
            style = style + "</style>";

            return style;
        }
        this.render = function(){
            element = $(this.getstyles() + '<div class="' + this.element + ' sbid_' + this.id + ' is_resizable"></div>');
            $("body").append(element);
        };
    }


    var Resizer = new Resizable();

    $('.is_resizable').mouseover(function(event){ Resizer.SetActiveResizeElement($(this)); event.stopPropagation();  });



    /*
    var padding = {top: 0,right: 0,bottom: 0, left: 0};

    var hoverElement = $(
        "<div class='brdrs'>"+
            "<div class='top'></div>"+
            "<div class='right'></div>"+
            "<div class='bottom'></div>"+
            "<div class='left'></div>"+
            "<a class='addbelow' href='#'>+</div>"+
        "</div>");


    $(".sb_section").hover(function(e){
            $(this).prepend(hoverElement);
        },
        function(e){
            //$(".brdrs").remove();
        }
    );



    var isDragging = false;
    var elementToResize = null;
    var mousePos = null;


    $("body").on({
        mouseenter: function () { $(this).addClass('active'); },
        mouseleave: function () { $(this).removeClass('active'); }
    },".sb_section .brdrs div");



    $(".sb_section").mousemove(function( event ){

        if(!isDragging) return;

        console.log("resizing element");

        var pos = {
            left: elementToResize[0].getBoundingClientRect().left + $(window)['scrollLeft'](),
            right: elementToResize[0].getBoundingClientRect().right + $(window)['scrollLeft'](),
            top: elementToResize[0].getBoundingClientRect().top + $(window)['scrollTop'](),
            bottom: elementToResize[0].getBoundingClientRect().bottom + $(window)['scrollTop']()
        };

        var width = elementToResize.outerWidth();
        var height = elementToResize.outerHeight();


        if(elementToResize.hasClass('left')){
            var w = event.pageX - pos.left;
            elementToResize.css('width', w + 'px');
            padding.left = w;
        }

        if(elementToResize.hasClass('right')){
            var w = pos.right - event.pageX;
            elementToResize.css('width', w + 'px');
            padding.right = w;
        }

        if(elementToResize.hasClass('bottom')){

        }

        if(elementToResize.hasClass('top')){
            var h = event.pageY - pos.top;
            elementToResize.css('height', h + 'px');

            padding.top = h;
        }

        elementToResize.closest(".sb_section").css('padding',padding.top + "px " + padding.right + "px " + padding.bottom + "px " + padding.left + "px");

    });

    $("body").on({mousedown: function(event){

            elementToResize = $(this);
            isDragging = true;

            mousePos = event;

            console.log(mousePos);

        }, mouseup: function(){

            isDragging = false;
            elementToResize = null;

        }
    },".sb_section .brdrs div");
    */

});

function Resizable() {

    this.ActiveElement = null;

    this.isDragging = false;
    this.isDraggingElement = null;

    this.SetActiveResizeElement = function(Element){
        if(this.isDragging) return;

        var OldElement = this.ActiveElement;
        this.DeActivateElement(OldElement);

        this.ActiveElement = Element;
        this.ActivateElement(this.ActiveElement);
    };

    this.DeActivateElement = function(Element){
        if(Element == null) return;
        Element.find('.brdrs').remove();
    };

    this.ActivateElement = function(Element){
        Element.append(this.hoverelements());

        this.SetupDragListener(Element);
    };

    this.SetupDragListener = function(Element){

        var CurrentClass = this;

        Element.on({mousedown: function(event){
            CurrentClass.isDragging = true;
            CurrentClass.isDraggingElement = $(this);
        }, mouseup: function(event) {
            CurrentClass.isDragging = false;
            CurrentClass.isDraggingElement = null;
        }},".brdrs div");

        Element.on({mouseenter: function (event) {
            $(this).addClass('active'); event.stopPropagation();
        }, mouseleave: function (event) {
            if(CurrentClass.isDragging) return;
            $(this).removeClass('active'); }
        },".brdrs div");

    };

    this.hoverelements = function(){
        return $(
        "<div class='brdrs'>"+
            "<div class='top'></div>"+
            "<div class='right'></div>"+
            "<div class='bottom'></div>"+
            "<div class='left'></div>"+
            "<a class='addbelow' href='#'>+</div>"+
        "</div>");
    };
}

function Container(){



}
</script>



</body>
</html>