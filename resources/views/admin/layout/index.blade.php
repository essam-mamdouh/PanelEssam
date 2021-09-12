<!DOCTYPE html>
<html lang="en">
@includeIf("admin.layout.head")
<body>
<div id="mytask-layout" class="theme-indigo">

    <!--  BEGIN SIDEBAR  -->
    @includeIf("admin.layout.aside.index")

    <div class="main px-lg-4 px-md-4">
        @includeIf("admin.layout.header")
        <div class="body d-flex py-3">
            @yield("content")
            </div>
    </div>
</div>
@includeIf("admin.components.modals.delete-modal")
@includeIf("admin.layout.scripts")
</body>
</html>
