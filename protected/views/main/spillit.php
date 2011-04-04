
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/spillit.css" />
<textarea id='spill_text' rows='5'>some text here</textarea>
<!-- The following line defines content type and utf-8 as character set. -->
<!-- If you want your application to work flawlessly with various local -->
<!-- characters, just make ALL strings, on the page, json and database utf-8. -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Ext relies on its default css so include it here. -->
<!-- This must come BEFORE javascript includes! -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/ext/resources/css/ext-all.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/ext/resources/css/ext-all.css">

<!-- Include here your own css files if you have them. -->

<!-- First of javascript includes must be an adapter... -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ext/adapter/ext/ext-base.js"></script>

<!-- ...then you need the Ext itself, either debug or production version. -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ext/ext-all-debug.js"></script>

<!-- Include here your extended classes if you have some. -->

<!-- Include here you application javascript file if you have it. -->


<script src="/js/SI/"></script>
<script type="text/javascript">
Ext.onReady(
    function () {
        var label = new Ext.form.Label({text:'test run'});
        label.render(Ext.get('test'));
    }
);
</script>
<input type='button' value='Spill it'>
<div id="test"></div>
<?php echo ($file->contents);?>
