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
        $__internal_9776dfc54729718e1d6098d65c8d38f8a9408d69bdd380865d4ebf599703b9e0 = $this->env->getExtension("native_profiler");
        $__internal_9776dfc54729718e1d6098d65c8d38f8a9408d69bdd380865d4ebf599703b9e0->enter($__internal_9776dfc54729718e1d6098d65c8d38f8a9408d69bdd380865d4ebf599703b9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9776dfc54729718e1d6098d65c8d38f8a9408d69bdd380865d4ebf599703b9e0->leave($__internal_9776dfc54729718e1d6098d65c8d38f8a9408d69bdd380865d4ebf599703b9e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d249337ea7295749fa5ff8dd100f03ae8100b18cec7370ee843ca66aa344bcf0 = $this->env->getExtension("native_profiler");
        $__internal_d249337ea7295749fa5ff8dd100f03ae8100b18cec7370ee843ca66aa344bcf0->enter($__internal_d249337ea7295749fa5ff8dd100f03ae8100b18cec7370ee843ca66aa344bcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d249337ea7295749fa5ff8dd100f03ae8100b18cec7370ee843ca66aa344bcf0->leave($__internal_d249337ea7295749fa5ff8dd100f03ae8100b18cec7370ee843ca66aa344bcf0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cb9240fbc280e2b5ac0f8eaba693bcc234c3a795ac89f9a59ff9b7aff1bd9b7 = $this->env->getExtension("native_profiler");
        $__internal_7cb9240fbc280e2b5ac0f8eaba693bcc234c3a795ac89f9a59ff9b7aff1bd9b7->enter($__internal_7cb9240fbc280e2b5ac0f8eaba693bcc234c3a795ac89f9a59ff9b7aff1bd9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7cb9240fbc280e2b5ac0f8eaba693bcc234c3a795ac89f9a59ff9b7aff1bd9b7->leave($__internal_7cb9240fbc280e2b5ac0f8eaba693bcc234c3a795ac89f9a59ff9b7aff1bd9b7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d42cb0768bb8882328467db4356eaea6dc4bb18dd74361d408bf8462b2d763 = $this->env->getExtension("native_profiler");
        $__internal_56d42cb0768bb8882328467db4356eaea6dc4bb18dd74361d408bf8462b2d763->enter($__internal_56d42cb0768bb8882328467db4356eaea6dc4bb18dd74361d408bf8462b2d763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_56d42cb0768bb8882328467db4356eaea6dc4bb18dd74361d408bf8462b2d763->leave($__internal_56d42cb0768bb8882328467db4356eaea6dc4bb18dd74361d408bf8462b2d763_prof);

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
