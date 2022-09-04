<?php require_once('config.php') ?>
<!-- config.php should be here as the first include  -->
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<?php include('includes/head_section.php'); ?>
<title>Bioinformatics</title>
</head>
<body>
<div class="container">
<!-- navbar -->
<?php include('includes/navbar.php') ?>
<div  class="myform1">
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[2]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span><span class="nn">pandas</span><span class="k">as</span><span class="nn">pd</span>
<span class="n">z</span><span class="o">=</span><span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="s1">&#39;iris1.csv&#39;</span><span class="p">)</span>
<span class="n">z</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt output_prompt">Out[2]:</div>
<div class="output_html rendered_html output_subarea output_execute_result">
<div>
<style scoped>
.dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }
.dataframe tbody tr th {
        vertical-align: top;
    }
.dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
<thead>
<tr style="text-align: right;">
<th></th>
<th>sepal_length</th>
<th>sepal_width</th>


<th>petal_length</th>
<th>petal_width</th>
<th>species</th>
</tr>
</thead>
<tbody>
<tr>
<th>0</th>
<td>5.1</td>
<td>3.5</td>
<td>1.4</td>
<td>0.2</td>
<td>setosa</td>
</tr>
<tr>
<th>1</th>
<td>4.9</td>
<td>3.0</td>
<td>1.4</td>
<td>0.2</td>
<td>setosa</td>
</tr>
<tr>
<th>2</th>
<td>4.7</td>
<td>3.2</td>
<td>1.3</td>
<td>0.2</td>
<td>setosa</td>
</tr>
<tr>
<th>3</th>
<td>4.6</td>
<td>3.1</td>
<td>1.5</td>
<td>0.2</td>
<td>setosa</td>
</tr>
.
.
.
.
.
.
<th>145</th>
<td>6.7</td>
<td>3.0</td>
<td>5.2</td>
<td>2.3</td>


<td>virginica</td>
</tr>
<tr>
<th>146</th>
<td>6.3</td>
<td>2.5</td>
<td>5.0</td>
<td>1.9</td>
<td>virginica</td>
</tr>
<tr>
<th>147</th>
<td>6.5</td>
<td>3.0</td>
<td>5.2</td>
<td>2.0</td>
<td>virginica</td>
</tr>
<tr>
<th>148</th>
<td>6.2</td>
<td>3.4</td>
<td>5.4</td>
<td>2.3</td>
<td>virginica</td>
</tr>
<tr>
<th>149</th>
<td>5.9</td>
<td>3.0</td>
<td>5.1</td>
<td>1.8</td>
<td>virginica</td>
</tr>
</tbody>
</table>
<p>150 rows × 5 columns</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[3]:</div>


<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">z</span><span class="o">.</span><span class="n">info</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt output_prompt">Out[3]:</div>
<div class="output_text output_subarea output_execute_result">
<pre>&lt;bound method DataFrame.info of      sepal_length  sepal_width  petal_length  petal_width    species
0             5.1          3.5           1.4          0.2     setosa
1             4.9          3.0           1.4          0.2     setosa
2             4.7          3.2           1.3          0.2     setosa
3             4.6          3.1           1.5          0.2     setosa
4             5.0          3.6           1.4          0.2     setosa
5             5.4          3.9           1.7          0.4     setosa
6             4.6          3.4           1.4          0.3     setosa
7             5.0          3.4           1.5          0.2     setosa
8             4.4          2.9           1.4          0.2     setosa
9             4.9          3.1           1.5          0.1     setosa
10            5.4          3.7           1.5          0.2     setosa
11            4.8          3.4           1.6          0.2     setosa
12            4.8          3.0           1.4          0.1     setosa
13            4.3          3.0           1.1          0.1     setosa
14            5.8          4.0           1.2          0.2     setosa
15            5.7          4.4           1.5          0.4     setosa
16            5.4          3.9           1.3          0.4     setosa
17            5.1          3.5           1.4          0.3     setosa
18            5.7          3.8           1.7          0.3     setosa
19            5.1          3.8           1.5          0.3     setosa
20            5.4          3.4           1.7          0.2     setosa
21            5.1          3.7           1.5          0.4     setosa
22            4.6          3.6           1.0          0.2     setosa
23            5.1          3.3           1.7          0.5     setosa
24            4.8          3.4           1.9          0.2     setosa
25            5.0          3.0           1.6          0.2     setosa
26            5.0          3.4           1.6          0.4     setosa
27            5.2          3.5           1.5          0.2     setosa
28            5.2          3.4           1.4          0.2     setosa
29            4.7          3.2           1.6          0.2     setosa
..            ...          ...           ...          ...        ...
120           6.9          3.2           5.7          2.3  virginica


121           5.6          2.8           4.9          2.0  virginica
122           7.7          2.8           6.7          2.0  virginica
123           6.3          2.7           4.9          1.8  virginica
124           6.7          3.3           5.7          2.1  virginica
125           7.2          3.2           6.0          1.8  virginica
126           6.2          2.8           4.8          1.8  virginica
127           6.1          3.0           4.9          1.8  virginica
128           6.4          2.8           5.6          2.1  virginica
129           7.2          3.0           5.8          1.6  virginica
130           7.4          2.8           6.1          1.9  virginica
131           7.9          3.8           6.4          2.0  virginica
132           6.4          2.8           5.6          2.2  virginica
133           6.3          2.8           5.1          1.5  virginica
134           6.1          2.6           5.6          1.4  virginica
135           7.7          3.0           6.1          2.3  virginica
136           6.3          3.4           5.6          2.4  virginica
137           6.4          3.1           5.5          1.8  virginica
138           6.0          3.0           4.8          1.8  virginica
139           6.9          3.1           5.4          2.1  virginica
140           6.7          3.1           5.6          2.4  virginica
141           6.9          3.1           5.1          2.3  virginica
142           5.8          2.7           5.1          1.9  virginica
143           6.8          3.2           5.9          2.3  virginica
144           6.7          3.3           5.7          2.5  virginica
145           6.7          3.0           5.2          2.3  virginica
146           6.3          2.5           5.0          1.9  virginica
147           6.5          3.0           5.2          2.0  virginica
148           6.2          3.4           5.4          2.3  virginica
149           5.9          3.0           5.1          1.8  virginica
[150 rows x 5 columns]&gt;</pre>
</div>
</div>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[9]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span><span class="nn">numpy</span><span class="k">as</span><span class="nn">np</span>
<span class="kn">import</span><span class="nn">matplotlib.pyplot</span><span class="k">as</span><span class="nn">plt</span>
<span class="o">%</span><span class="k">matplotlib</span> inline


<span class="n">z</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">kind</span><span class="o">=</span><span class="s1">&#39;scatter&#39;</span><span class="p">,</span><span class="n">x</span><span class="o">=</span><span class="s1">&#39;sepal_length&#39;</span><span class="p">,</span><span class="n">y</span><span class="o">=</span><span class="s1">&#39;sepal_width&#39;</span><span class="p">);</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,..."
>
</div>
</div>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[16]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span><span class="nn">seaborn</span><span class="k">as</span><span class="nn">sns</span>
<span class="n">sns</span><span class="o">.</span><span class="n">set_style</span><span class="p">(</span><span class="s1">&#39;whitegrid&#39;</span><span class="p">);</span>
<span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">z</span><span class="p">,</span><span class="n">hue</span><span class="o">=</span><span class="s1">&#39;species&#39;</span><span class="p">,</span><span class="n">size</span><span class="o">=</span><span class="mi">4</span><span class="p">)</span>\
<span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">plt</span><span class="o">.</span><span class="n">scatter</span><span class="p">,</span><span class="s1">&#39;sepal_length&#39;</span><span class="p">,</span><span class="s1">&#39;sepal_width&#39;</span><span class="p">)</span>\
<span class="o">.</span><span class="n">add_legend</span><span class="p">();</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">


<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,..."
>
</div>
</div>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[15]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span><span class="nn">seaborn</span><span class="k">as</span><span class="nn">sns</span>
<span class="n">sns</span><span class="o">.</span><span class="n">set_style</span><span class="p">(</span><span class="s1">&#39;whitegrid&#39;</span><span class="p">);</span>
<span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">z</span><span class="p">,</span><span class="n">hue</span><span class="o">=</span><span class="s1">&#39;species&#39;</span><span class="p">,</span><span class="n">size</span><span class="o">=</span><span class="mi">4</span><span class="p">)</span>\
<span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">plt</span><span class="o">.</span><span class="n">scatter</span><span class="p">,</span><span class="s1">&#39;petal_length&#39;</span><span class="p">,</span><span class="s1">&#39;petal_width&#39;</span><span class="p">)</span>\
<span class="o">.</span><span class="n">add_legend</span><span class="p">();</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,..."
>
</div>
</div>
</div>
</div>
</div>


<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[22]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">close</span><span class="p">()</span>
<span class="n">sns</span><span class="o">.</span><span class="n">set_style</span><span class="p">(</span><span class="s1">&#39;whitegrid&#39;</span><span class="p">);</span>
<span class="n">sns</span><span class="o">.</span><span class="n">pairplot</span><span class="p">(</span><span class="n">z</span><span class="p">,</span><span class="n">hue</span><span class="o">=</span><span class="s1">&#39;species&#39;</span><span class="p">,</span><span class="n">size</span><span class="o">=</span><span class="mi">3</span><span class="p">);</span>
<span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,... "
>
</div>
</div>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[24]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">import</span><span class="nn">numpy</span><span class="k">as</span><span class="nn">np</span>
<span class="n">z_setosa</span><span class="o">=</span><span class="n">z</span><span class="o">.</span><span class="n">loc</span><span class="p">[</span><span class="n">z</span><span class="p">[</span><span class="s1">&#39;species&#39;</span><span class="p">]</span><span class="o">==</span><span class="s1">&#39;setosa&#39;</span><span class="p">];</span>
<span class="n">z_virginica</span><span class="o">=</span><span class="n">z</span><span class="o">.</span><span class="n">loc</span><span class="p">[</span><span class="n">z</span><span 



class="p">[</span><span class="s1">&#39;species&#39;</span><span class="p">]</span><span class="o">==</span><span class="s1">&#39;virginica&#39;</span><span class="p">];</span>
<span class="n">z_versicolor</span><span class="o">=</span><span class="n">z</span><span class="o">.</span><span class="n">loc</span><span class="p">[</span><span class="n">z</span><span class="p">[</span><span class="s1">&#39;species&#39;</span><span class="p">]</span><span class="o">==</span><span class="s1">&#39;versicolor&#39;</span><span class="p">];</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">z_setosa</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">],</span><span class="n">np</span><span class="o">.</span><span class="n">zeros_like</span><span class="p">(</span><span class="n">z_setosa</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]),</span><span class="s1">&#39;o&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">z_versicolor</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">],</span><span class="n">np</span><span class="o">.</span><span class="n">zeros_like</span><span class="p">(</span><span class="n">z_versicolor</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]),</span><span class="s1">&#39;o&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">z_virginica</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">],</span><span class="n">np</span><span class="o">.</span><span class="n">zeros_like</span><span class="p">(</span><span class="n">z_virginica</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]),</span><span class="s1">&#39;o&#39;</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,... "
>
</div>

</div>
</div>
</div>
</div>




<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[27]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">z</span><span class="p">,</span><span class="n">hue</span><span class="o">=</span><span class="s1">&#39;species&#39;</span><span class="p">,</span><span class="n">size</span><span class="o">=</span><span class="mi">5</span><span class="p">)</span>\
<span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">sns</span><span class="o">.</span><span class="n">distplot</span><span class="p">,</span><span class="s1">&#39;petal_length&#39;</span><span class="p">)</span>\
<span class="o">.</span><span class="n">add_legend</span><span class="p">();</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_subarea output_stream output_stderr output_text">
<!--<pre>C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
</pre> -->
</div>
</div>
<div class="output_area">

<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,... "
>
</div>
</div>
</div>
</div>


</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[28]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">z</span><span class="p">,</span><span class="n">hue</span><span class="o">=</span><span class="s1">&#39;species&#39;</span><span class="p">,</span><span class="n">size</span><span class="o">=</span><span class="mi">5</span><span class="p">)</span>\
<span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">sns</span><span class="o">.</span><span class="n">distplot</span><span class="p">,</span><span class="s1">&#39;petal_width&#39;</span><span class="p">)</span>\
<span class="o">.</span><span class="n">add_legend</span><span class="p">();</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_subarea output_stream output_stderr output_text">
<!--<pre>C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
</pre> -->
</div>
</div>
<div class="output_area">
<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,... "
>
</div>
</div>
</div>
</div>


</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[29]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">z</span><span class="p">,</span><span class="n">hue</span><span class="o">=</span><span class="s1">&#39;species&#39;</span><span class="p">,</span><span class="n">size</span><span class="o">=</span><span class="mi">5</span><span class="p">)</span>\
<span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">sns</span><span class="o">.</span><span class="n">distplot</span><span class="p">,</span><span class="s1">&#39;sepal_length&#39;</span><span class="p">)</span>\
<span class="o">.</span><span class="n">add_legend</span><span class="p">();</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_subarea output_stream output_stderr output_text">
<!--<pre>C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
</pre> -->
</div>
</div>
<div class="output_area">
<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,... "
>
</div>
</div>
</div>
</div>


</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[30]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">sns</span><span class="o">.</span><span class="n">FacetGrid</span><span class="p">(</span><span class="n">z</span><span class="p">,</span><span class="n">hue</span><span class="o">=</span><span class="s1">&#39;species&#39;</span><span class="p">,</span><span class="n">size</span><span class="o">=</span><span class="mi">5</span><span class="p">)</span>\
<span class="o">.</span><span class="n">map</span><span class="p">(</span><span class="n">sns</span><span class="o">.</span><span class="n">distplot</span><span class="p">,</span><span class="s1">&#39;sepal_width&#39;</span><span class="p">)</span>\
<span class="o">.</span><span class="n">add_legend</span><span class="p">();</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">
<div class="prompt"></div>
<div class="output_subarea output_stream output_stderr output_text">
<!--<pre>C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
C:\ProgramData\Anaconda3\lib\site-packages\matplotlib\axes\_axes.py:6462: UserWarning: The &#39;normed&#39; kwarg is deprecated, and has been replaced by the &#39;density&#39; kwarg.
warnings.warn(&#34;The &#39;normed&#39; kwarg is deprecated, and has been &#34;
</pre> -->
</div>
</div>
<div class="output_area">
<div class="prompt"></div>
<div class="output_png output_subarea ">
<img src="data:image/png;base64,... "
>
</div>
</div>
</div>
</div>


</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[31]:</div>
<div class="inner_cell">
<div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="s1">&#39;means:&#39;</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">mean</span><span class="p">(</span><span class="n">z_setosa</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]))</span>
<span class="nb">print</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">mean</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">append</span><span class="p">(</span><span class="n">z_setosa</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">],</span><span class="mi">50</span><span class="p">)))</span>
<span class="nb">print</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">mean</span><span class="p">(</span><span class="n">z_virginica</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]))</span>
<span class="nb">print</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">mean</span><span class="p">(</span><span class="n">z_versicolor</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]))</span>
<span class="nb">print</span><span class="p">(</span><span class="s1">&#39;</span><span class="se">\n</span><span class="s1">Std-dev:&#39;</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">std</span><span class="p">(</span><span class="n">z_setosa</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]))</span>
<span class="nb">print</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">std</span><span class="p">(</span><span class="n">z_virginica</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]))</span>
<span class="nb">print</span><span class="p">(</span><span class="n">np</span><span class="o">.</span><span class="n">std</span><span class="p">(</span><span class="n">z_versicolor</span><span class="p">[</span><span class="s1">&#39;petal_length&#39;</span><span class="p">]))</span>
</pre></div>
</div>
</div>
</div>
<div class="output_wrapper">
<div class="output">
<div class="output_area">


<div class="prompt"></div>
<div class="output_subarea output_stream output_stdout output_text">
<pre>means:
1.464
2.4156862745098038
5.552
4.26
Std-dev:
0.17176728442867115
0.5463478745268441
0.4651881339845204
</pre>
</div>
</div>
</div>
</div>
</div>
<?php include( ROOT_PATH . '/includes/footer.php'); ?
