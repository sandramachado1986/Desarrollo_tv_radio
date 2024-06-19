var myMenu = 'https://docs.google.com/spreadsheets/d/1Oj7932uY8__-PzIvlyrpoMzsYCuQkNQG/edit#gid=656744909';

// Compile Handlebars template for team RBI leaders.
var VITemplate = Handlebars.compile($('<div><div id="{{cells.Categoria}}" class="row col-6 hdr-tab _color_blue _txt_left"><h1>&nbsp;&nbsp; {{cells.Titulo}}</h1></div></div>').html());



var VITemplate = Handlebars.compile($('#menu-template').html());

// Load top five team RBI leaders.
$('#menu').sheetrock({
    url: myMenu,
    query: "select A,B,C,D,E",
    fetchSize: 50,
    headersOff: true,
    headers: 1,
    labels: ['Id', 'Titulo', 'Imagen', 'Url', 'Categoria'],
    rowTemplate: VITemplate
});