<!-- Put this script tag to the <head> of your page -->
<script
  type="text/javascript"
  src="https://vk.com/js/api/openapi.js?168"
  charset="windows-1251"
></script>
<script type="text/javascript">
  VK.init({ apiId: 8072608 });
</script>

<!-- Put this script tag to the place, where the Login block will be -->
<div id="vk_auth"></div>
<script type="text/javascript">
  VK.Widgets.Auth("vk_auth", {authUrl: "/dev/Login"});
</script>