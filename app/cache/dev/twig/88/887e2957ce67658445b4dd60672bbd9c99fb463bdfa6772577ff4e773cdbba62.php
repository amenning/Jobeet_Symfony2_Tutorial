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
        $__internal_316e495e53e032b307e5f042b3a024654081caf592c8c48f0f1a559d37bfca9d = $this->env->getExtension("native_profiler");
        $__internal_316e495e53e032b307e5f042b3a024654081caf592c8c48f0f1a559d37bfca9d->enter($__internal_316e495e53e032b307e5f042b3a024654081caf592c8c48f0f1a559d37bfca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316e495e53e032b307e5f042b3a024654081caf592c8c48f0f1a559d37bfca9d->leave($__internal_316e495e53e032b307e5f042b3a024654081caf592c8c48f0f1a559d37bfca9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f293da4cd3052d409028628af2c96b0835ef8c49a37c5fb7118d80ad2102a2b3 = $this->env->getExtension("native_profiler");
        $__internal_f293da4cd3052d409028628af2c96b0835ef8c49a37c5fb7118d80ad2102a2b3->enter($__internal_f293da4cd3052d409028628af2c96b0835ef8c49a37c5fb7118d80ad2102a2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f293da4cd3052d409028628af2c96b0835ef8c49a37c5fb7118d80ad2102a2b3->leave($__internal_f293da4cd3052d409028628af2c96b0835ef8c49a37c5fb7118d80ad2102a2b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e369f71c2e9fa76e2bcd63a6517875be0c89d3793eafb2f65b61d3ba1f655ac = $this->env->getExtension("native_profiler");
        $__internal_9e369f71c2e9fa76e2bcd63a6517875be0c89d3793eafb2f65b61d3ba1f655ac->enter($__internal_9e369f71c2e9fa76e2bcd63a6517875be0c89d3793eafb2f65b61d3ba1f655ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e369f71c2e9fa76e2bcd63a6517875be0c89d3793eafb2f65b61d3ba1f655ac->leave($__internal_9e369f71c2e9fa76e2bcd63a6517875be0c89d3793eafb2f65b61d3ba1f655ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e6e2486b7f4dd42cc53b6b10c66d5eaed3ebf8408abbb420354cce18ef06829 = $this->env->getExtension("native_profiler");
        $__internal_0e6e2486b7f4dd42cc53b6b10c66d5eaed3ebf8408abbb420354cce18ef06829->enter($__internal_0e6e2486b7f4dd42cc53b6b10c66d5eaed3ebf8408abbb420354cce18ef06829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0e6e2486b7f4dd42cc53b6b10c66d5eaed3ebf8408abbb420354cce18ef06829->leave($__internal_0e6e2486b7f4dd42cc53b6b10c66d5eaed3ebf8408abbb420354cce18ef06829_prof);

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
