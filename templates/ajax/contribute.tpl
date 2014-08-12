<script type="text/javascript">
  $('#contribute').parsley();
</script>

<h5><?= $base["name"] ?></h5>
<form role="form" action="?action=contribute" method="post" id="contribute" class="form-horizontal">
  <input type="hidden" name="id" value="<?= $id ?>">
  <input id="start" name="start" type="number" placeholder="Established" class="form-control input-md" required="" required data-parsley-type="integer">
  <input id="end" name="end" type="number" placeholder="Left in" class="form-control input-md" data-parsley-type="integer">
  <input id="source" name="source" type="url" placeholder="Source (URL)" class="form-control input-md" required="" required data-parsley-type="url">
  <button id="submit" type="submit" class="btn btn-primary">Submit</button>
</form>