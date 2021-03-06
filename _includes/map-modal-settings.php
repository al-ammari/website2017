<div class="ui settings modal">
    <div class="header">
        <h5 title="Click on buttons to adjust the way routes are displayed, to take effect following the next search">Map Settings</h5>
        <i><img id="settings-close-btn" class="ui image right floated" src="/_assets/img/icn-close.svg" alt=""></i>
    </div>

    <div class="content">

      <div id="map-op-0" class="map-actions-controls" >
        <h4>Router Mapping</h4>
        <input id="map-allow-multiple" class="map-tool-off" type="button" onMouseDown="setAllowMultipleTrs()" value="Multiple TRs"/>
        <input id="map-allow-recenter" class="map-tool-on" type="button" onMouseDown="setAllowRecenter()" value="Re-center"/>
      </div>

      <div id="map-op-1" class="map-actions-controls">
        <h4>Display</h4>
        <input id="map-show-hops" class="map-tool-on" type="button" onMouseDown="setShowHops()" value="Hops"/>
        <input id="map-show-routers" class="map-tool-on" type="button" onMouseDown="setShowRouters()" value="Routers"/>
        <input id="map-show-marker-origin" class="map-tool-off" type="button" onMouseDown="setAddMarkerInOrigin()" value="Marker in Origin"/>
      </div>

      <div id="map-op-2" class="map-actions-controls">
        <h4>Exclude Routers</h4>
        <input id="map-exclude-a" class="map-tool-on" type="button" onMouseDown="excludeA()" value="Lat/Long = 0"/>
        <input id="map-exclude-b" class="map-tool-on" type="button" onMouseDown="excludeB()" value="Generic Locations"/>
        <input id="map-exclude-d" class="map-tool-on" type="button" onMouseDown="excludeD()" value="Reserved AS"/>
        <input id="map-exclude-e" class="map-tool-on" type="button" onMouseDown="excludeE()" value="User-flagged"/>
      </div>

    </div>
</div>