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
        $__internal_bea54c98c11338b12de891919bf8de7f83c288015125dbc84c0c865ddd22cc4d = $this->env->getExtension("native_profiler");
        $__internal_bea54c98c11338b12de891919bf8de7f83c288015125dbc84c0c865ddd22cc4d->enter($__internal_bea54c98c11338b12de891919bf8de7f83c288015125dbc84c0c865ddd22cc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea54c98c11338b12de891919bf8de7f83c288015125dbc84c0c865ddd22cc4d->leave($__internal_bea54c98c11338b12de891919bf8de7f83c288015125dbc84c0c865ddd22cc4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38037ae0b5f317b5e724580daf5e5964d74a953bf40d8f9ccd6b840854ae6e98 = $this->env->getExtension("native_profiler");
        $__internal_38037ae0b5f317b5e724580daf5e5964d74a953bf40d8f9ccd6b840854ae6e98->enter($__internal_38037ae0b5f317b5e724580daf5e5964d74a953bf40d8f9ccd6b840854ae6e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_38037ae0b5f317b5e724580daf5e5964d74a953bf40d8f9ccd6b840854ae6e98->leave($__internal_38037ae0b5f317b5e724580daf5e5964d74a953bf40d8f9ccd6b840854ae6e98_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03cf29a81ac6d6bd5b319225e4925f758fb96e64659e339ccdbfceef8a8b6cb9 = $this->env->getExtension("native_profiler");
        $__internal_03cf29a81ac6d6bd5b319225e4925f758fb96e64659e339ccdbfceef8a8b6cb9->enter($__internal_03cf29a81ac6d6bd5b319225e4925f758fb96e64659e339ccdbfceef8a8b6cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03cf29a81ac6d6bd5b319225e4925f758fb96e64659e339ccdbfceef8a8b6cb9->leave($__internal_03cf29a81ac6d6bd5b319225e4925f758fb96e64659e339ccdbfceef8a8b6cb9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7e2efdfc45ec500ad142ead619ec4630314523a45c658ff2ab708802582ad3c = $this->env->getExtension("native_profiler");
        $__internal_a7e2efdfc45ec500ad142ead619ec4630314523a45c658ff2ab708802582ad3c->enter($__internal_a7e2efdfc45ec500ad142ead619ec4630314523a45c658ff2ab708802582ad3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a7e2efdfc45ec500ad142ead619ec4630314523a45c658ff2ab708802582ad3c->leave($__internal_a7e2efdfc45ec500ad142ead619ec4630314523a45c658ff2ab708802582ad3c_prof);

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
