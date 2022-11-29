<div class="CSSgal">
  <!-- Don't wrap targets in parent -->
  <s id="s1"></s>
  <s id="s2"></s>
  <s id="s3"></s>
  <s id="s4"></s>

  <div class="slider">
    <div style="background: #BA8C63">
      <img src="{{ URL::asset('assets/img/1.jpg') }}" alt="img" />
    </div>
    <div style="background: #BA8C63">
      <img src="{{ URL::asset('assets/img/2.jpg') }}" alt="img" />
    </div>
    <div style="background: #BA8C63">
      <img src="{{ URL::asset('assets/img/3.jpg') }}" alt="img" />
    </div>
    <div style="background: #BA8C63">
      <img src="{{ URL::asset('assets/img/4.jpg') }}" alt="img" />
    </div>
  </div>

  <div class="prevNext">
    <div><a href="#s4"><</a><a href="#s2">></a></div>
    <div><a href="#s1"><</a><a href="#s3">></a></div>
    <div><a href="#s2"><</a><a href="#s4">></a></div>
    <div><a href="#s3"><</a><a href="#s1">></a></div>
  </div>

  <div class="bullets">
    <a href="#s1">1</a>
    <a href="#s2">2</a>
    <a href="#s3">3</a>
    <a href="#s4">4</a>
  </div>
</div>
