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
        $__internal_010493b7d8204010ec9499f0a241329a39436f54269903c31908a0f568f2ca86 = $this->env->getExtension("native_profiler");
        $__internal_010493b7d8204010ec9499f0a241329a39436f54269903c31908a0f568f2ca86->enter($__internal_010493b7d8204010ec9499f0a241329a39436f54269903c31908a0f568f2ca86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_010493b7d8204010ec9499f0a241329a39436f54269903c31908a0f568f2ca86->leave($__internal_010493b7d8204010ec9499f0a241329a39436f54269903c31908a0f568f2ca86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1f94adf829c55a74a50ffb0a84f86b0095680efce97ed0fd3f2781e7d196bd0 = $this->env->getExtension("native_profiler");
        $__internal_f1f94adf829c55a74a50ffb0a84f86b0095680efce97ed0fd3f2781e7d196bd0->enter($__internal_f1f94adf829c55a74a50ffb0a84f86b0095680efce97ed0fd3f2781e7d196bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f1f94adf829c55a74a50ffb0a84f86b0095680efce97ed0fd3f2781e7d196bd0->leave($__internal_f1f94adf829c55a74a50ffb0a84f86b0095680efce97ed0fd3f2781e7d196bd0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbf973dff0482df4115ff774a61e9786c25d24552b912a0724c98c2a69b19296 = $this->env->getExtension("native_profiler");
        $__internal_cbf973dff0482df4115ff774a61e9786c25d24552b912a0724c98c2a69b19296->enter($__internal_cbf973dff0482df4115ff774a61e9786c25d24552b912a0724c98c2a69b19296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cbf973dff0482df4115ff774a61e9786c25d24552b912a0724c98c2a69b19296->leave($__internal_cbf973dff0482df4115ff774a61e9786c25d24552b912a0724c98c2a69b19296_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32662a885ae1498506e27f03e7a85199cd4ef22e8d2cf34f6300fb6cf5f33db0 = $this->env->getExtension("native_profiler");
        $__internal_32662a885ae1498506e27f03e7a85199cd4ef22e8d2cf34f6300fb6cf5f33db0->enter($__internal_32662a885ae1498506e27f03e7a85199cd4ef22e8d2cf34f6300fb6cf5f33db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_32662a885ae1498506e27f03e7a85199cd4ef22e8d2cf34f6300fb6cf5f33db0->leave($__internal_32662a885ae1498506e27f03e7a85199cd4ef22e8d2cf34f6300fb6cf5f33db0_prof);

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
