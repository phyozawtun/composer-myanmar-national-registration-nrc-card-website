<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Composer Package - Myanmar National Registration Card</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/css/adminlte.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.7.2/build/styles/default.min.css">
  <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.7.2/build/highlight.min.js"></script>
  <!-- and it's easy to individually load additional languages -->
  <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.7.2/build/languages/php.min.js"></script>
  <script>hljs.highlightAll();</script>


</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("./../views/nav-main.php");  ?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-12">
              <ol class="breadcrumb mb-5">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Documentation</li>
              </ol>
            </div><!-- /.col -->
            <div class="col-12">
              <h1 class="m-0"> PHP Composer Package -  <small>Myanmar National Registration Card.</small></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <section class="content">
          <div class="container">
              <div class="row">
                    <div class="col-12">














                      <h1 id="documentation-md">DOCUMENTATION.md</h1>
                      <p>Myanmar National Registration Card. </p>
                      <h1 id="getnrc">getNRC</h1>
                      <p>getNRC - Get states and states&#39; disticts short codes as array.</p>
                      <h3 id="description">Description</h3>
<pre><code class="lang-php">getNRC ( <span class="hljs-literal">null</span>|<span class="hljs-built_in">int</span>|array $state_id, bool|<span class="hljs-literal">null</span> $associative)
</code></pre>
<p>Use for Myanmar Citizen NRC system. Return states and states&#39; disticts short codes as array.</p>
<h3 id="parameters">Parameters</h3>
<p><strong>state_id</strong></p>
<p>​            Default is <strong><code>null</code></strong>. When <strong><code>null</code></strong> return all states and states&#39; disticts short codes. When filter a single state or multiple states, return only requested states and states&#39; disticts short codes.</p>
<p><strong>associative</strong></p>
<p>​            When <strong><code>true</code></strong> and <strong><code>null</code></strong>, objects will be returned as associative arrays; when <strong><code>false</code></strong>, objects will be returned as objects.</p>
<h3 id="return-values">Return Values</h3>
<p>Returns the value in associative arrays or objects. </p>
<h3 id="examples">Examples</h3>
<p><strong>Example #1 Get all states and states&#39; disticts short codes</strong></p>
<pre><code class="lang-php+HTML"><span class="php"><span class="hljs-meta">&lt;?php</span>

$array = getNRC();
var_dump($array);

<span class="hljs-meta">?&gt;</span></span>
</code></pre>
                      <p>The above example will output:</p>
                    <pre><code class="lang-php+HTML">array(<span class="hljs-number">2</span>) {
                      [<span class="hljs-number">0</span>]=&gt;
                      array(<span class="hljs-number">9</span>) {
                        [<span class="hljs-number">0</span>]=&gt;
                        array(<span class="hljs-number">4</span>) {
                          [<span class="hljs-string">"distict_id"</span>]=&gt;
                          <span class="hljs-type">string</span>(<span class="hljs-number">2</span>) <span class="hljs-string">"24"</span>
                          [<span class="hljs-string">"township_en"</span>]=&gt;
                          <span class="hljs-type">string</span>(<span class="hljs-number">7</span>) <span class="hljs-string">"BaLaKha"</span>
                          [<span class="hljs-string">"township_mm"</span>]=&gt;
                          <span class="hljs-type">string</span>(<span class="hljs-number">33</span>) <span class="hljs-string">"(ဘလခ) ဘော်လခဲ"</span>
                          [<span class="hljs-string">"state_id"</span>]=&gt;
                          <span class="hljs-type">string</span>(<span class="hljs-number">1</span>) <span class="hljs-string">"2"</span>
                        }
                        ...
                    </code></pre>
                      <p><strong>Example #2 Filter single or multiple states and states&#39; disticts short codes</strong></p>
<pre><code class="lang-php+HTML"><span class="php"><span class="hljs-meta">&lt;?php</span>

$array1 = getNRC(<span class="hljs-number">12</span>);
var_dump($array1); <span class="hljs-comment">// Output disticts with state_id 12 only</span>


$array2 = getNRC([<span class="hljs-number">12</span>,<span class="hljs-number">6</span>,<span class="hljs-number">7</span>]); <span class="hljs-comment">// Output disticts with state_id 12, 6 and 7 only</span>
var_dump($array2);

<span class="hljs-meta">?&gt;</span></span>
</code></pre>
                      <h3 id="notes">Notes</h3>
                      <blockquote>
                      <p><strong>Note:</strong>
                      More examples available in <strong><code>repository/examples/</code></strong> directory.  These examples also available on <u>web demo</u>.</p>
                      </blockquote>
                      <h1 id="isnrc">isNRC</h1>
                      <p>isNRC - Check input NRC number is valid.</p>
                      <h3 id="description">Description</h3>
                      <pre><code class="lang-php">isNRC ( numeric_strings $state_id, <span class="hljs-built_in">string</span> $distict, numeric_strings $reg_no, <span class="hljs-built_in">string</span>|<span class="hljs-literal">null</span> $lang)
                      </code></pre>
                      <p>Use for Myanmar Citizen NRC system. When value is <strong>valid</strong>, return as <strong><code>true</code></strong>; when value is <strong>invalid</strong>, return as <strong><code>false</code></strong>.</p>
                      <h3 id="parameters">Parameters</h3>
                      <p><strong>state_id</strong></p>
                      <p>​            Prefer <strong><code>numeric_strings</code></strong></p>
                      <p><strong>district</strong></p>
                      <p>​            Prefer <strong><code>numeric_strings</code></strong></p>
                      <p><strong>reg_no</strong></p>
                      <p>​            Prefer <strong><code>numeric_strings</code></strong></p>
                      <p><strong>lang</strong></p>
                      <p>​            Defaule value is <strong>en</strong>. When <strong>en</strong>, require input values as ASCII charaicter; when value is <strong>mm</strong>, require input values as Myanmar Unicode string; when value is <strong>any</strong>, require input value as ASCII charaicter or Myanmar Unicode string.</p>
                      <h3 id="return-value">Return Value</h3>
                      <p>Returns the value in <strong><code>bool</code></strong>. When the values of <strong><code>state_id</code></strong> and <strong><code>district</code></strong> is not matched, returned as <strong><code>false</code></strong>; when the values of <strong><code>reg_no</code></strong> is not numeric, returned as <strong><code>false</code></strong>; when the values of <strong><code>reg_no</code></strong> is not 6 digit, returned as <strong><code>false</code></strong>; when the <strong><code>lang</code></strong> value and rest of values not matched, returned as <strong><code>false</code></strong>.</p>
                      <h3 id="examples">Examples</h3>
                      <p><strong>Example #1 Simple vaid and invalid examples</strong></p>
<pre><code class="lang-php+HTML"><span class="php"><span class="hljs-meta">&lt;?php</span>
<span class="hljs-comment">// This output will be valid</span>
$state_id = <span class="hljs-number">12</span>;
$distict = <span class="hljs-string">"BaTaHta"</span>;
$reg_no = <span class="hljs-number">010203</span>;
$is_valid = isNRC($state_id,$distict,$reg_no,$lang);
var_dump($is_valid);

<span class="hljs-comment">// This output will be invalid</span>
$lang = <span class="hljs-string">"mm"</span>;
$is_valid = isNRC($state_id,$distict,$reg_no,$lang);
var_dump($is_valid);

<span class="hljs-meta">?&gt;</span></span>
</code></pre>
                      <p>The above example will output:</p>
<pre><code class="lang-php+HTML"><span class="hljs-literal">true</span>
<span class="hljs-literal">false</span>
</code></pre>
                      <p><strong>Example #2 Commoon invalid examples comparing with valid examples</strong></p>
<pre><code class="lang-php+HTML">// Simple check <span class="hljs-keyword">with</span> English Charaictes
$is_valid = isNRC(<span class="hljs-string">"12"</span>,<span class="hljs-string">"BaTaHta"</span>,<span class="hljs-string">"010203"</span>)<span class="hljs-comment">;</span>
var_dump($is_valid)<span class="hljs-comment">;</span>

// Simple check <span class="hljs-keyword">with</span> English Charaictes
$is_valid = isNRC(<span class="hljs-string">"12"</span>,<span class="hljs-string">"LaMaNa"</span>,<span class="hljs-string">"010203"</span>,<span class="hljs-string">"en"</span>)<span class="hljs-comment">;</span>
var_dump($is_valid)<span class="hljs-comment">;</span>

// Mixup Myannar <span class="hljs-literal">and</span> English numeric charaictes check
$is_valid = isNRC(<span class="hljs-string">"12"</span>,<span class="hljs-string">"ဗတထ"</span>,<span class="hljs-string">"010203"</span>,<span class="hljs-string">"mm"</span>)<span class="hljs-comment">;</span>
var_dump($is_valid)<span class="hljs-comment">;</span>

// Can mixup Myannar <span class="hljs-literal">and</span> English numeric charaictes
$is_valid = isNRC(<span class="hljs-string">"12"</span>,<span class="hljs-string">"BaTaHta"</span>,<span class="hljs-string">'၀၁၀၂၀၃'</span>,<span class="hljs-string">'any'</span>)<span class="hljs-comment">;</span>
var_dump($is_valid)<span class="hljs-comment">;</span>

// Can mixup Myanamr <span class="hljs-literal">and</span> English charaictes <span class="hljs-keyword">for</span> numeric <span class="hljs-built_in">string</span> where lang is en <span class="hljs-literal">or</span> mm
$is_valid = isNRC(<span class="hljs-string">"12"</span>,<span class="hljs-string">"လမန"</span>,<span class="hljs-string">'၀၁၀၂၀၃'</span>,<span class="hljs-string">"mm"</span>)<span class="hljs-comment">;</span>
var_dump($is_valid)<span class="hljs-comment">;</span>

// Defined language <span class="hljs-literal">and</span> input must be relevent
$lang = <span class="hljs-string">"en"</span><span class="hljs-comment">;</span>
$is_valid = isNRC($state_id,$distict,$reg_no,$lang)<span class="hljs-comment">;</span>
var_dump($is_valid)<span class="hljs-comment">;</span>

// Township codes <span class="hljs-literal">and</span> state_id must be relative
$is_valid = isNRC(<span class="hljs-string">"6"</span>,<span class="hljs-string">"BaTaHta"</span>,<span class="hljs-number">010203</span>)<span class="hljs-comment">;</span>
var_dump($is_valid)<span class="hljs-comment">;</span>

// Reg no mush be <span class="hljs-number">6</span> digit
$is_valid = isNRC(<span class="hljs-string">"6"</span>,<span class="hljs-string">"BaTaHta"</span>,<span class="hljs-number">001002003</span>)<span class="hljs-comment">;</span>
var_dump($is_valid)<span class="hljs-comment">;</span>
</code></pre>
<p>The above example will output:</p>
<pre><code class="lang-php+HTML"><span class="hljs-function"><span class="hljs-title">bool</span><span class="hljs-params">(true)</span></span>
<span class="hljs-function"><span class="hljs-title">bool</span><span class="hljs-params">(true)</span></span>
<span class="hljs-function"><span class="hljs-title">bool</span><span class="hljs-params">(true)</span></span>
<span class="hljs-function"><span class="hljs-title">bool</span><span class="hljs-params">(true)</span></span>
<span class="hljs-function"><span class="hljs-title">bool</span><span class="hljs-params">(true)</span></span>
<span class="hljs-function"><span class="hljs-title">bool</span><span class="hljs-params">(false)</span></span>
<span class="hljs-function"><span class="hljs-title">bool</span><span class="hljs-params">(false)</span></span>
<span class="hljs-function"><span class="hljs-title">bool</span><span class="hljs-params">(false)</span></span>
</code></pre>
                      <p>Notes</p>
                      <blockquote>
                      <p>Note:
                      More examples available in <strong><code>repository/examples/</code></strong> directory.  These examples also available on <strong>web demo</strong>.</p>
                      </blockquote>





































                    </div>
              </div>
              <!-- /.row -->
          </div>
      </section>
  </div>




























  <?php include("./../views/footer.php");  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./assets/js/demo.js"></script>
</body>
</html>
