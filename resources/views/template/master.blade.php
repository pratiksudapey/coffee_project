<!DOCTYPE html>
<html lang="en">
<head>
    @include("template.metatag")
    @include("template.style")
</head>
<body>
@include("template.navbar")
@yield("body_section")
</body>
@include("template.script")
</html>
