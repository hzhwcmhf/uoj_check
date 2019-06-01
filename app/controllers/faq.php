<?php echoUOJPageHeader(UOJLocale::get('help')) ?>
<article>
	<header>
		<h2 class="page-header">常见问题及其解答</h2>
	</header>
	<section>
		<header>
			<h4>1. 什么是UOJ</h4>
		</header>
		<p>这是为了OOP（面向对象程序设计）专门搭建的UOJ特制版。原版也在线运行，见 <a href="http://uoj.ac/blog/4">http://uoj.ac/blog/4</a>（注意会链接到另一个网站）。 </p>
	</section>
	<section>
		<header>
			<h4>2. 注册后怎么上传头像</h4>
		</header>
		<p>UOJ不提供头像存储服务。每到一个网站都要上传一个头像挺烦的对不对？UOJ支持Gravatar，请使用Gravatar吧！Gravatar是一个全球的头像存储服务，你的头像将会与你的电子邮箱绑定。在各大网站比如各种Wordpress还有各种OJ比如Vijos、Contest Hunter上，只要你电子邮箱填对了，那么你的头像也就立即能显示了！</p>
		<p>快使用Gravatar吧！ Gravatar地址：<a href="https://cn.gravatar.com/">https://cn.gravatar.com/</a>。进去后注册个帐号然后与邮箱绑定并上传头像，就ok啦！</p>
	</section>
	<section>
		<header>
			<h4>3. UOJ的测评环境</h4>
		</header>
		<p>测评环境是Linux，Ubuntu 14.04，64位系统。</p>
		<p>作为OOP特别定制版，你可以写自己的Makefile，当然使用的编译器也不能超过以下范围。</p>
		<p>C++的编译器是 g++ 7.4.0，编译命令：<code>g++ code.cpp -o code -lm -O2 -DONLINE_JUDGE</code>。如果选择C++11会在编译命令后面添加<code>-std=c++11</code>。</p>
		<p>C的编译器是 gcc 7.4.0，编译命令：<code>gcc code.c -o code -lm -O2 -DONLINE_JUDGE</code>。</p>
		<p>Pascal的编译器是 fpc 2.6.2，编译命令：<code>fpc code.pas -O2</code>。</p>
		<p>Java7（暂不支持）JDK版本是 jdk-7u76，编译命令：<code>javac code.java</code>。</p>
		<p>Java8（暂不支持）的JDK版本是 jdk-8u31，编译命令：<code>javac code.java</code>。</p>
		<p>Python会先编译为优化过的字节码<samp>.pyo</samp>文件。支持的Python版本分别为Python 2.7和3.4。</p>
	</section>
	<section>
		<header>
			<h4>4. 递归 10<sup>7</sup> 层怎么没爆栈啊</h4>
		</header>
		<p>没错就是这样！除非是特殊情况，UOJ测评程序时的栈大小与该题的空间限制是相等的！</p>
	</section>
	<section>
		<header>
			<h4>5. 博客使用指南</h4>
		</header>
		<p>已经搭好啦！原版使用指南见 <a href="http://uoj.ac/blog/7">http://uoj.ac/blog/7</a>。 </p>
	</section>
	<section>
		<header>
			<h4>6. 联系方式</h4>
		</header>
		<p>对于参加OOP选课的同学，可以参考网络学堂。如果发现了网站的BUG，可以在微信群中提出，也可以联系huangfei382@163.com</p>
	</section>
</article>

<?php echoUOJPageFooter() ?>
