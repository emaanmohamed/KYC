<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<body>



</body>

<script src="js/bootstrap.min.js"></script>
<script src="js/wizardstep.js"></script>
<script>
$('[data-toggle="boostrap-wizard-step"]').boostrapWizardStep({
startStep: 0,
onNextStep: callback,
onBackStep: callback,
onJumpBack: callback,
tabIdentifier:  "#wizard-tab",
contentIdentifier:  "#wizard-content",
btnNextIdentifier:  "#next",
btnPreviousIdentifier:  "#previous"
});

</script>
</html>
