@extends('sistem_pakar.template.app')
 
@section('title', 'Page Title')
 
@section('content')

 <!-- Sidebar -->
 <aside class="bd-sidebar">
      <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="bdSidebar" aria-labelledby="bdSidebarOffcanvasLabel">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="bdSidebarOffcanvasLabel">Browse docs</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdSidebar"></button>
        </div>

        <div class="offcanvas-body">
          <nav class="bd-links w-100" id="bd-docs-nav" aria-label="Docs navigation">
            <ul class=" list-unstyled mb-0 pb-3 pb-md-2 pe-lg-2" style='display:flex;list-style-type: none;'>
                <li class="bd-links-group p-4 bg-dark">
                    <ul class="list-unstyled fw-normal pb-2 small">
                        <li><a href="/docs/5.3/getting-started/introduction/" class="bd-links-link d-inline-block rounded">Preview</a></li>
                        <li><a href="/forwardchaining/data-object" class="bd-links-link d-inline-block rounded">Manage Data Object</a></li>
                        <li><a href="/forwardchaining/data-rule" class="bd-links-link d-inline-block rounded">Manage Data Rules</a></li>
                        <li><a href="/docs/5.3/getting-started/contents/" class="bd-links-link d-inline-block rounded">Manage Data Group</a></li>
                        <li><a href="/docs/5.3/getting-started/browsers-devices/" class="bd-links-link d-inline-block rounded">Setting</a></li>
                        <li><a href="/docs/5.3/getting-started/javascript/" class="bd-links-link d-inline-block rounded">About</a></li>
                    </ul>
                </li>
                <li class="bd-links-group px-5 py-2">
                        <!-- Main -->
                        @yield('fc-content')
                        <!-- End Main -->
                </li>
            </ul>
        </div>
      </div>
    </aside>
  <!-- End Sidebar -->
    <p>Forward Chaining Method</p>

@endsection