<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c00035491781223455851eb1727d96d91413b2648db13cf907fa246c50ef2fb2 extends Twig_Template
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
        $__internal_ddb75e36e7e73acb34485ae5dc6efa8840abfb0a864e455746f7b3eb976fa0ca = $this->env->getExtension("native_profiler");
        $__internal_ddb75e36e7e73acb34485ae5dc6efa8840abfb0a864e455746f7b3eb976fa0ca->enter($__internal_ddb75e36e7e73acb34485ae5dc6efa8840abfb0a864e455746f7b3eb976fa0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddb75e36e7e73acb34485ae5dc6efa8840abfb0a864e455746f7b3eb976fa0ca->leave($__internal_ddb75e36e7e73acb34485ae5dc6efa8840abfb0a864e455746f7b3eb976fa0ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f44ceec5c82568e7d7b2b6ab4f426d744bd431bbb63829719a60d21113d91b26 = $this->env->getExtension("native_profiler");
        $__internal_f44ceec5c82568e7d7b2b6ab4f426d744bd431bbb63829719a60d21113d91b26->enter($__internal_f44ceec5c82568e7d7b2b6ab4f426d744bd431bbb63829719a60d21113d91b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f44ceec5c82568e7d7b2b6ab4f426d744bd431bbb63829719a60d21113d91b26->leave($__internal_f44ceec5c82568e7d7b2b6ab4f426d744bd431bbb63829719a60d21113d91b26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b370d9bf61761f07aa5090df31011ec7e0027c048e81bd7f3aebb91299ffe216 = $this->env->getExtension("native_profiler");
        $__internal_b370d9bf61761f07aa5090df31011ec7e0027c048e81bd7f3aebb91299ffe216->enter($__internal_b370d9bf61761f07aa5090df31011ec7e0027c048e81bd7f3aebb91299ffe216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b370d9bf61761f07aa5090df31011ec7e0027c048e81bd7f3aebb91299ffe216->leave($__internal_b370d9bf61761f07aa5090df31011ec7e0027c048e81bd7f3aebb91299ffe216_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_82fe5cd156f7ca84a9d45745cde21d35d28345f19faee846ea59c309e5fa5ec3 = $this->env->getExtension("native_profiler");
        $__internal_82fe5cd156f7ca84a9d45745cde21d35d28345f19faee846ea59c309e5fa5ec3->enter($__internal_82fe5cd156f7ca84a9d45745cde21d35d28345f19faee846ea59c309e5fa5ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_82fe5cd156f7ca84a9d45745cde21d35d28345f19faee846ea59c309e5fa5ec3->leave($__internal_82fe5cd156f7ca84a9d45745cde21d35d28345f19faee846ea59c309e5fa5ec3_prof);

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
