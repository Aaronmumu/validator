# validator
通用检验类-抽离选自https://www.kancloud.cn/manual/thinkphp5/129320
<div id="s-1804855094"><p>系统内置的验证规则如下：</p>
<h2><a id="_2"></a>格式验证类</h2>
<blockquote class="info"><h3><a id="require_4"></a>require</h3></blockquote>
<p>验证某个字段必须，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'require'</span>
</code></pre>
<blockquote class="info"><h3><a id="number__integer_11"></a>number 或者 integer</h3></blockquote>
<p>验证某个字段的值是否为数字（采用<code>filter_var</code>验证），例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'number'</span>
</code></pre>
<blockquote class="info"><h3><a id="float_18"></a>float</h3></blockquote>
<p>验证某个字段的值是否为浮点数字（采用<code>filter_var</code>验证），例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'float'</span>
</code></pre>
<blockquote class="info"><h3><a id="boolean_25"></a>boolean</h3></blockquote>
<p>验证某个字段的值是否为布尔值（采用<code>filter_var</code>验证），例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'boolean'</span>
</code></pre>
<blockquote class="info"><h3><a id="email_32"></a>email</h3></blockquote>
<p>验证某个字段的值是否为email地址（采用<code>filter_var</code>验证），例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'email'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'email'</span>
</code></pre>
<blockquote class="info"><h3><a id="array_39"></a>array</h3></blockquote>
<p>验证某个字段的值是否为数组，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'info'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'array'</span>
</code></pre>
<blockquote class="info"><h3><a id="accepted_46"></a>accepted</h3></blockquote>
<p>验证某个字段是否为为 yes, on, 或是 1。这在确认"服务条款"是否同意时很有用，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'accept'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'accepted'</span>
</code></pre>
<blockquote class="info"><h3><a id="date_53"></a>date</h3></blockquote>
<p>验证值是否为有效的日期，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'date'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'date'</span>
</code></pre>
<p>会对日期值进行<code>strtotime</code>后进行判断。</p>
<blockquote class="info"><h3><a id="alpha_61"></a>alpha</h3></blockquote>
<p>验证某个字段的值是否为字母，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'alpha'</span>
</code></pre>
<blockquote class="info"><h3><a id="alphaNum_68"></a>alphaNum</h3></blockquote>
<p>验证某个字段的值是否为字母和数字，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'alphaNum'</span>
</code></pre>
<blockquote class="info"><h3><a id="alphaDash_75"></a>alphaDash</h3></blockquote>
<p>验证某个字段的值是否为字母和数字，下划线<code>_</code>及破折号<code>-</code>，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'alphaDash'</span>
</code></pre>
<blockquote class="info"><h3><a id="chs_82"></a>chs</h3></blockquote>
<p>验证某个字段的值只能是汉字，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'chs'</span>
</code></pre>
<blockquote class="info"><h3><a id="chsAlpha_89"></a>chsAlpha</h3></blockquote>
<p>验证某个字段的值只能是汉字、字母，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'chsAlpha'</span>
</code></pre>
<blockquote class="info"><h3><a id="chsAlphaNum_96"></a>chsAlphaNum</h3></blockquote>
<p>验证某个字段的值只能是汉字、字母和数字，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'chsAlphaNum'</span>
</code></pre>
<blockquote class="info"><h3><a id="chsDash_103"></a>chsDash</h3></blockquote>
<p>验证某个字段的值只能是汉字、字母、数字和下划线_及破折号-，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'chsDash'</span>
</code></pre>
<blockquote class="info"><h3><a id="activeUrl_110"></a>activeUrl</h3></blockquote>
<p>验证某个字段的值是否为有效的域名或者IP，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'host'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'activeUrl'</span>
</code></pre>
<blockquote class="info"><h3><a id="url_117"></a>url</h3></blockquote>
<p>验证某个字段的值是否为有效的URL地址（采用<code>filter_var</code>验证），例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'url'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'url'</span>
</code></pre>
<blockquote class="info"><h3><a id="ip_124"></a>ip</h3></blockquote>
<p>验证某个字段的值是否为有效的IP地址（采用<code>filter_var</code>验证），例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'ip'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'ip'</span>
</code></pre>
<p>支持验证ipv4和ipv6格式的IP地址。</p>
<blockquote class="info"><h3><a id="dateFormatformat_132"></a>dateFormat:format</h3></blockquote>
<p>验证某个字段的值是否为指定格式的日期，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'create_time'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'dateFormat:y-m-d'</span>
</code></pre>
<h2><a id="_139"></a>长度和区间验证类</h2>
<blockquote class="info"><h3><a id="in_141"></a>in</h3></blockquote>
<p>验证某个字段的值是否在某个范围，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'in:1,2,3'</span>
</code></pre>
<blockquote class="info"><h3><a id="notIn_148"></a>notIn</h3></blockquote>
<p>验证某个字段的值不在某个范围，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'notIn:1,2,3'</span>
</code></pre>
<blockquote class="info"><h3><a id="between_155"></a>between</h3></blockquote>
<p>验证某个字段的值是否在某个区间，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'between:1,10'</span>
</code></pre>
<blockquote class="info"><h3><a id="notBetween_162"></a>notBetween</h3></blockquote>
<p>验证某个字段的值不在某个范围，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'notBetween:1,10'</span>
</code></pre>
<blockquote class="info"><h3><a id="lengthnum1num2_169"></a>length:num1,num2</h3></blockquote>
<p>验证某个字段的值的长度是否在某个范围，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'length:4,25'</span>
</code></pre>
<p>或者指定长度</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'length:4'</span>
</code></pre>
<blockquote class="default"><p>如果验证的数据是数组，则判断数组的长度。<br>
如果验证的数据是File对象，则判断文件的大小。</p></blockquote>
<blockquote class="info"><h3><a id="maxnumber_183"></a>max:number</h3></blockquote>
<p>验证某个字段的值的最大长度，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'max:25'</span>
</code></pre>
<blockquote class="default"><p>如果验证的数据是数组，则判断数组的长度。<br>
如果验证的数据是File对象，则判断文件的大小。</p></blockquote>
<blockquote class="info"><h3><a id="minnumber_193"></a>min:number</h3></blockquote>
<p>验证某个字段的值的最小长度，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'min:5'</span>
</code></pre>
<blockquote class="default"><p>如果验证的数据是数组，则判断数组的长度。<br>
如果验证的数据是File对象，则判断文件的大小。</p></blockquote>
<blockquote class="info"><h3><a id="after_203"></a>after:日期</h3></blockquote>
<p>验证某个字段的值是否在某个日期之后，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'begin_time'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'after:2016-3-18'</span><span class="token punctuation">,</span>
</code></pre>
<blockquote class="info"><h3><a id="before_210"></a>before:日期</h3></blockquote>
<p>验证某个字段的值是否在某个日期之前，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'end_time'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'before:2016-10-01'</span><span class="token punctuation">,</span>
</code></pre>
<blockquote class="info"><h3><a id="expire_217"></a>expire:开始时间,结束时间</h3></blockquote>
<p>验证当前操作（注意不是某个值）是否在某个有效日期之内，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'expire_time'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'expire:2016-2-1,2016-10-01'</span><span class="token punctuation">,</span>
</code></pre>
<blockquote class="info"><h3><a id="allowIpallow1allow2_224"></a>allowIp:allow1,allow2,...</h3></blockquote>
<p>验证当前请求的IP是否在某个范围，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'allowIp:114.45.4.55'</span><span class="token punctuation">,</span>
</code></pre>
<p>该规则可以用于某个后台的访问权限</p>
<blockquote class="info"><h3><a id="denyIpallow1allow2_232"></a>denyIp:allow1,allow2,...</h3></blockquote>
<p>验证当前请求的IP是否禁止访问，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'denyIp:114.45.4.55'</span><span class="token punctuation">,</span>
</code></pre>
<h2><a id="_239"></a>字段比较类</h2>
<blockquote class="info"><h3><a id="confirm_240"></a>confirm</h3></blockquote>
<p>验证某个字段是否和另外一个字段的值一致，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'repassword'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'require|confirm:password'</span>
</code></pre>
<p><code>5.0.4+</code>版本开始，增加了字段自动匹配验证规则，如password和password_confirm是自动相互验证的，只需要使用</p>
<pre><code class="ಠhighlight-container"><span class="token string">'password'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'require|confirm'</span>
</code></pre>
<p>会自动验证和password_confirm进行字段比较是否一致，反之亦然。</p>
<blockquote class="info"><h3><a id="different_253"></a>different</h3></blockquote>
<p>验证某个字段是否和另外一个字段的值不一致，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'name'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'require|different:account'</span>
</code></pre>
<blockquote class="info"><h3><a id="eq____same_260"></a>eq 或者 = 或者 same</h3></blockquote>
<p>验证是否等于某个值，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'score'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'eq:100'</span>
<span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'=:100'</span>
<span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'same:100'</span>
</code></pre>
<blockquote class="info"><h3><a id="egt___269"></a>egt 或者 &gt;=</h3></blockquote>
<p>验证是否大于等于某个值，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'score'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'egt:60'</span>
<span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'&gt;=:100'</span>
</code></pre>
<blockquote class="info"><h3><a id="gt___277"></a>gt 或者 &gt;</h3></blockquote>
<p>验证是否大于某个值，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'score'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'gt:60'</span>
<span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'&gt;:100'</span>
</code></pre>
<blockquote class="info"><h3><a id="elt___285"></a>elt 或者 &lt;=</h3></blockquote>
<p>验证是否小于等于某个值，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'score'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'elt:100'</span>
<span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'&lt;=:100'</span>
</code></pre>
<blockquote class="info"><h3><a id="lt___293"></a>lt 或者 &lt;</h3></blockquote>
<p>验证是否小于某个值，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'score'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'lt:100'</span>
<span class="token string">'num'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'&lt;:100'</span>
</code></pre>
<blockquote class="info"><h3><a id="V508_301"></a>验证字段比较支持对比其他字段（V5.0.8+）</h3></blockquote>
<p>验证对比其他字段大小（数值大小对比），例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'price'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'lt:market_price'</span>
<span class="token string">'price'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'&lt;:market_price'</span>
</code></pre>
<h2><a id="filter_309"></a>filter验证</h2>
<p>支持使用filter_var进行验证，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'ip'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'filter:validate_ip'</span>
</code></pre>
<h2><a id="_315"></a>正则验证</h2>
<p>支持直接使用正则验证，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'zip'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'\d{6}'</span><span class="token punctuation">,</span>
<span class="token comment">// 或者</span>
<span class="token string">'zip'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'regex:\d{6}'</span><span class="token punctuation">,</span>
</code></pre>
<p>如果你的正则表达式中包含有<code>|</code>符号的话，必须使用数组方式定义。</p>
<pre><code class="ಠhighlight-container"><span class="token string">'accepted'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token punctuation">[</span><span class="token string">'regex'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'/^(yes|on|1)$/i'</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
</code></pre>
<p>也可以实现预定义正则表达式后直接调用，例如在验证器类中定义<code>regex</code>属性</p>
<pre><code class="ಠhighlight-container">    protected $regex <span class="token operator">=</span> <span class="token punctuation">[</span> <span class="token string">'zip'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'\d{6}'</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
</code></pre>
<p>然后就可以使用</p>
<pre><code class="ಠhighlight-container"><span class="token string">'zip'</span>	<span class="token operator">=</span><span class="token operator">&gt;</span>	<span class="token string">'regex:zip'</span><span class="token punctuation">,</span>
</code></pre>
<h2><a id="_336"></a>上传验证</h2>
<blockquote class="info"><h3><a id="file_338"></a>file</h3></blockquote>
<p>验证是否是一个上传文件</p>
<blockquote class="info"><h3><a id="imagewidthheighttype_342"></a>image:width,height,type</h3></blockquote>
<p>验证是否是一个图像文件，width height和type都是可选，width和height必须同时定义。</p>
<blockquote class="info"><h3><a id="fileExt_346"></a>fileExt:允许的文件后缀</h3></blockquote>
<p>验证上传文件后缀</p>
<blockquote class="info"><h3><a id="fileMime_350"></a>fileMime:允许的文件类型</h3></blockquote>
<p>验证上传文件类型</p>
<blockquote class="info"><h3><a id="fileSize_354"></a>fileSize:允许的文件字节大小</h3></blockquote>
<p>验证上传文件大小</p>
<h2><a id="_358"></a>行为验证</h2>
<p>使用行为验证数据，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token string">'data'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'behavior:\app\index\behavior\Check'</span>
</code></pre>
<h2><a id="_364"></a>其它验证</h2>
<blockquote class="info"><h3><a id="uniquetablefieldexceptpk_366"></a>unique:table,field,except,pk</h3></blockquote>
<table><thead><tr><th>版本</th><th>调整功能</th></tr></thead><tbody><tr><td>5.0.5</td><td>支持指定完整模型类 并且默认会优先检测模型类是否存在 不存在则检测数据表</td></tr></tbody></table>
<p>验证当前请求的字段值是否为唯一的，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token comment">// 表示验证name字段的值是否在user表（不包含前缀）中唯一</span>
<span class="token string">'name'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:user'</span><span class="token punctuation">,</span>
<span class="token comment">// 验证其他字段</span>
<span class="token string">'name'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:user,account'</span><span class="token punctuation">,</span>
<span class="token comment">// 排除某个主键值</span>
<span class="token string">'name'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:user,account,10'</span><span class="token punctuation">,</span>
<span class="token comment">// 指定某个主键值排除</span>
<span class="token string">'name'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:user,account,10,user_id'</span><span class="token punctuation">,</span>
</code></pre>
<p>如果需要对复杂的条件验证唯一，可以使用下面的方式：</p>
<pre><code class="ಠhighlight-container"><span class="token comment">// 多个字段验证唯一验证条件</span>
<span class="token string">'name'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:user,status^account'</span><span class="token punctuation">,</span>
<span class="token comment">// 复杂验证条件</span>
<span class="token string">'name'</span>   <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:user,status=1&amp;account='</span><span class="token punctuation">.</span>$data<span class="token punctuation">[</span><span class="token string">'account'</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
</code></pre>
<blockquote class="info"><h3><a id="requireIffieldvalue_391"></a>requireIf:field,value</h3></blockquote>
<p>验证某个字段的值等于某个值的时候必须，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token comment">// 当account的值等于1的时候 password必须</span>
<span class="token string">'password'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'requireIf:account,1'</span>
</code></pre>
<blockquote class="info"><h3><a id="requireWithfield_399"></a>requireWith:field</h3></blockquote>
<p>验证某个字段有值的时候必须，例如：</p>
<pre><code class="ಠhighlight-container"><span class="token comment">// 当account有值的时候password字段必须</span>
<span class="token string">'password'</span><span class="token operator">=</span><span class="token operator">&gt;</span><span class="token string">'requireWith:account'</span>
</code></pre>
</div>
