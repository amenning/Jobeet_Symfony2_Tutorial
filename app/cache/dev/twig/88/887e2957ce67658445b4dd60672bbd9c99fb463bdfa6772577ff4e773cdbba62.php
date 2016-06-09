<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_640a2db2b754b49c23d427cf99dadbbfc5a24df6149f4d546f7fde7b9379bd21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_672175732897a16c477290c38ce5f4a61c99d3ecde96347e901332886494f2ba = $this->env->getExtension("native_profiler");
        $__internal_672175732897a16c477290c38ce5f4a61c99d3ecde96347e901332886494f2ba->enter($__internal_672175732897a16c477290c38ce5f4a61c99d3ecde96347e901332886494f2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_672175732897a16c477290c38ce5f4a61c99d3ecde96347e901332886494f2ba->leave($__internal_672175732897a16c477290c38ce5f4a61c99d3ecde96347e901332886494f2ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_edd38512206251f4be9fd94d87dd21d522e665be01a23fb777a9e03d5af1acb3 = $this->env->getExtension("native_profiler");
        $__internal_edd38512206251f4be9fd94d87dd21d522e665be01a23fb777a9e03d5af1acb3->enter($__internal_edd38512206251f4be9fd94d87dd21d522e665be01a23fb777a9e03d5af1acb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_edd38512206251f4be9fd94d87dd21d522e665be01a23fb777a9e03d5af1acb3->leave($__internal_edd38512206251f4be9fd94d87dd21d522e665be01a23fb777a9e03d5af1acb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92c7a6ebe73ab112d389f7aa1d7749a82aabf4d2d680f0ae8b1d7e60be389fec = $this->env->getExtension("native_profiler");
        $__internal_92c7a6ebe73ab112d389f7aa1d7749a82aabf4d2d680f0ae8b1d7e60be389fec->enter($__internal_92c7a6ebe73ab112d389f7aa1d7749a82aabf4d2d680f0ae8b1d7e60be389fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92c7a6ebe73ab112d389f7aa1d7749a82aabf4d2d680f0ae8b1d7e60be389fec->leave($__internal_92c7a6ebe73ab112d389f7aa1d7749a82aabf4d2d680f0ae8b1d7e60be389fec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b09d75748bdb43468cfe87da087c85de244c13e514a0e8bd6fe53f116470dcb = $this->env->getExtension("native_profiler");
        $__internal_7b09d75748bdb43468cfe87da087c85de244c13e514a0e8bd6fe53f116470dcb->enter($__internal_7b09d75748bdb43468cfe87da087c85de244c13e514a0e8bd6fe53f116470dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7b09d75748bdb43468cfe87da087c85de244c13e514a0e8bd6fe53f116470dcb->leave($__internal_7b09d75748bdb43468cfe87da087c85de244c13e514a0e8bd6fe53f116470dcb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
