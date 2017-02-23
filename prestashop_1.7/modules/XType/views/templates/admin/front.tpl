<style>
    #txtlzr{
        color: red;
        background: #00A4E7;
    }
</style>
<div id="container"> 
    <div id="txtlzr">
        <marquee scrollamount="2">Textualizer est un plugin jQuery qui vous permet de faire des transitions</marquee>
    </div> 
</div> 
<script type="text/javascript"> 
    $(function() {
        var txt = $('#txtlzr'); 
        txt.textualizer();
        txt.textualizer('start');
    })
</script>
