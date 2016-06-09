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
        $__internal_308679edfdd60a1850fd6e1c62d5a152d7ebb6d26b12692f3b7de6d58e71ef0d = $this->env->getExtension("native_profiler");
        $__internal_308679edfdd60a1850fd6e1c62d5a152d7ebb6d26b12692f3b7de6d58e71ef0d->enter($__internal_308679edfdd60a1850fd6e1c62d5a152d7ebb6d26b12692f3b7de6d58e71ef0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_308679edfdd60a1850fd6e1c62d5a152d7ebb6d26b12692f3b7de6d58e71ef0d->leave($__internal_308679edfdd60a1850fd6e1c62d5a152d7ebb6d26b12692f3b7de6d58e71ef0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a345fb074d8f27f0899d233090a40733c75499b04f25014e912b4f13b1e7a3c = $this->env->getExtension("native_profiler");
        $__internal_4a345fb074d8f27f0899d233090a40733c75499b04f25014e912b4f13b1e7a3c->enter($__internal_4a345fb074d8f27f0899d233090a40733c75499b04f25014e912b4f13b1e7a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4a345fb074d8f27f0899d233090a40733c75499b04f25014e912b4f13b1e7a3c->leave($__internal_4a345fb074d8f27f0899d233090a40733c75499b04f25014e912b4f13b1e7a3c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1f22c08f144317d9d7b54510fbb2a38f1bbedcbdb6b07ee2579e38606f0eaf1 = $this->env->getExtension("native_profiler");
        $__internal_b1f22c08f144317d9d7b54510fbb2a38f1bbedcbdb6b07ee2579e38606f0eaf1->enter($__internal_b1f22c08f144317d9d7b54510fbb2a38f1bbedcbdb6b07ee2579e38606f0eaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1f22c08f144317d9d7b54510fbb2a38f1bbedcbdb6b07ee2579e38606f0eaf1->leave($__internal_b1f22c08f144317d9d7b54510fbb2a38f1bbedcbdb6b07ee2579e38606f0eaf1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a10435382679fdd1063e8d4772fa87b1da3192ab551d6f445f0b060a85b5484 = $this->env->getExtension("native_profiler");
        $__internal_5a10435382679fdd1063e8d4772fa87b1da3192ab551d6f445f0b060a85b5484->enter($__internal_5a10435382679fdd1063e8d4772fa87b1da3192ab551d6f445f0b060a85b5484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5a10435382679fdd1063e8d4772fa87b1da3192ab551d6f445f0b060a85b5484->leave($__internal_5a10435382679fdd1063e8d4772fa87b1da3192ab551d6f445f0b060a85b5484_prof);

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
