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
        $__internal_c72fee20948f83745027857950bd1d9951325de739dcc92c7a09a27d033d8efc = $this->env->getExtension("native_profiler");
        $__internal_c72fee20948f83745027857950bd1d9951325de739dcc92c7a09a27d033d8efc->enter($__internal_c72fee20948f83745027857950bd1d9951325de739dcc92c7a09a27d033d8efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c72fee20948f83745027857950bd1d9951325de739dcc92c7a09a27d033d8efc->leave($__internal_c72fee20948f83745027857950bd1d9951325de739dcc92c7a09a27d033d8efc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09028b93530ab534ee108c5113a32f56ef34f8a9f6a96d1657de4c27cc2603f3 = $this->env->getExtension("native_profiler");
        $__internal_09028b93530ab534ee108c5113a32f56ef34f8a9f6a96d1657de4c27cc2603f3->enter($__internal_09028b93530ab534ee108c5113a32f56ef34f8a9f6a96d1657de4c27cc2603f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09028b93530ab534ee108c5113a32f56ef34f8a9f6a96d1657de4c27cc2603f3->leave($__internal_09028b93530ab534ee108c5113a32f56ef34f8a9f6a96d1657de4c27cc2603f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d4b0e0cf229dbc8cadf85a25094872bdd74926f81ec517c93d28017941ecc78 = $this->env->getExtension("native_profiler");
        $__internal_4d4b0e0cf229dbc8cadf85a25094872bdd74926f81ec517c93d28017941ecc78->enter($__internal_4d4b0e0cf229dbc8cadf85a25094872bdd74926f81ec517c93d28017941ecc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d4b0e0cf229dbc8cadf85a25094872bdd74926f81ec517c93d28017941ecc78->leave($__internal_4d4b0e0cf229dbc8cadf85a25094872bdd74926f81ec517c93d28017941ecc78_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f3cedb73d2aaec7d6d137733d5a9d63a7485273a58921cea788cb361915c6d6 = $this->env->getExtension("native_profiler");
        $__internal_8f3cedb73d2aaec7d6d137733d5a9d63a7485273a58921cea788cb361915c6d6->enter($__internal_8f3cedb73d2aaec7d6d137733d5a9d63a7485273a58921cea788cb361915c6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8f3cedb73d2aaec7d6d137733d5a9d63a7485273a58921cea788cb361915c6d6->leave($__internal_8f3cedb73d2aaec7d6d137733d5a9d63a7485273a58921cea788cb361915c6d6_prof);

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
