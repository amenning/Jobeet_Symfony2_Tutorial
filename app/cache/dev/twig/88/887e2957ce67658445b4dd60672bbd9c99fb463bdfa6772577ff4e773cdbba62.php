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
        $__internal_5a2c64d87791c4513fee44dd4950c71650a83b0abe1d7b6c5d4175c0bd10dfa5 = $this->env->getExtension("native_profiler");
        $__internal_5a2c64d87791c4513fee44dd4950c71650a83b0abe1d7b6c5d4175c0bd10dfa5->enter($__internal_5a2c64d87791c4513fee44dd4950c71650a83b0abe1d7b6c5d4175c0bd10dfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2c64d87791c4513fee44dd4950c71650a83b0abe1d7b6c5d4175c0bd10dfa5->leave($__internal_5a2c64d87791c4513fee44dd4950c71650a83b0abe1d7b6c5d4175c0bd10dfa5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1051b71a948293ed6ac8cd294a627cbbd6221025c6a04374ff60dec6ef0de2ac = $this->env->getExtension("native_profiler");
        $__internal_1051b71a948293ed6ac8cd294a627cbbd6221025c6a04374ff60dec6ef0de2ac->enter($__internal_1051b71a948293ed6ac8cd294a627cbbd6221025c6a04374ff60dec6ef0de2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1051b71a948293ed6ac8cd294a627cbbd6221025c6a04374ff60dec6ef0de2ac->leave($__internal_1051b71a948293ed6ac8cd294a627cbbd6221025c6a04374ff60dec6ef0de2ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2019158c6f9a73ccab50570e85682c89c87078bc32ff25c6883f94c26943ba6 = $this->env->getExtension("native_profiler");
        $__internal_a2019158c6f9a73ccab50570e85682c89c87078bc32ff25c6883f94c26943ba6->enter($__internal_a2019158c6f9a73ccab50570e85682c89c87078bc32ff25c6883f94c26943ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2019158c6f9a73ccab50570e85682c89c87078bc32ff25c6883f94c26943ba6->leave($__internal_a2019158c6f9a73ccab50570e85682c89c87078bc32ff25c6883f94c26943ba6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd5d44f240a74ac3a23e40679d42789b0201c634ce30ae803e74aa4a9a9b55f5 = $this->env->getExtension("native_profiler");
        $__internal_cd5d44f240a74ac3a23e40679d42789b0201c634ce30ae803e74aa4a9a9b55f5->enter($__internal_cd5d44f240a74ac3a23e40679d42789b0201c634ce30ae803e74aa4a9a9b55f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cd5d44f240a74ac3a23e40679d42789b0201c634ce30ae803e74aa4a9a9b55f5->leave($__internal_cd5d44f240a74ac3a23e40679d42789b0201c634ce30ae803e74aa4a9a9b55f5_prof);

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
