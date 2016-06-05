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
        $__internal_99c937212652c425579b4f20066085b0cbdee82b2153981ab77c056a7c4922e6 = $this->env->getExtension("native_profiler");
        $__internal_99c937212652c425579b4f20066085b0cbdee82b2153981ab77c056a7c4922e6->enter($__internal_99c937212652c425579b4f20066085b0cbdee82b2153981ab77c056a7c4922e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c937212652c425579b4f20066085b0cbdee82b2153981ab77c056a7c4922e6->leave($__internal_99c937212652c425579b4f20066085b0cbdee82b2153981ab77c056a7c4922e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdac29c055fb02149d99b65bdebd2598cc9cff7efc2613720e851df5374303a8 = $this->env->getExtension("native_profiler");
        $__internal_cdac29c055fb02149d99b65bdebd2598cc9cff7efc2613720e851df5374303a8->enter($__internal_cdac29c055fb02149d99b65bdebd2598cc9cff7efc2613720e851df5374303a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cdac29c055fb02149d99b65bdebd2598cc9cff7efc2613720e851df5374303a8->leave($__internal_cdac29c055fb02149d99b65bdebd2598cc9cff7efc2613720e851df5374303a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fcc0ddfc178f3f4b8b3bb2078608cc1b8237917c97acc03f77c1d05a8da0d19 = $this->env->getExtension("native_profiler");
        $__internal_1fcc0ddfc178f3f4b8b3bb2078608cc1b8237917c97acc03f77c1d05a8da0d19->enter($__internal_1fcc0ddfc178f3f4b8b3bb2078608cc1b8237917c97acc03f77c1d05a8da0d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1fcc0ddfc178f3f4b8b3bb2078608cc1b8237917c97acc03f77c1d05a8da0d19->leave($__internal_1fcc0ddfc178f3f4b8b3bb2078608cc1b8237917c97acc03f77c1d05a8da0d19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22a17c677f93298bc14859985dac42e21e5872752c165e80e9e5c767151dceb9 = $this->env->getExtension("native_profiler");
        $__internal_22a17c677f93298bc14859985dac42e21e5872752c165e80e9e5c767151dceb9->enter($__internal_22a17c677f93298bc14859985dac42e21e5872752c165e80e9e5c767151dceb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_22a17c677f93298bc14859985dac42e21e5872752c165e80e9e5c767151dceb9->leave($__internal_22a17c677f93298bc14859985dac42e21e5872752c165e80e9e5c767151dceb9_prof);

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
