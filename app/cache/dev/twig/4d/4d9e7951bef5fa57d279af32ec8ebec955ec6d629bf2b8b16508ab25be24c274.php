<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_205acc94e542b46da147428f321240ac476171d7c5df3cadb1a93aed8d1ea836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_7507242fa6bf740c3f3918c4524213bf4d3d92075d00ef20cf6894a9ca5ff83d = $this->env->getExtension("native_profiler");
        $__internal_7507242fa6bf740c3f3918c4524213bf4d3d92075d00ef20cf6894a9ca5ff83d->enter($__internal_7507242fa6bf740c3f3918c4524213bf4d3d92075d00ef20cf6894a9ca5ff83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7507242fa6bf740c3f3918c4524213bf4d3d92075d00ef20cf6894a9ca5ff83d->leave($__internal_7507242fa6bf740c3f3918c4524213bf4d3d92075d00ef20cf6894a9ca5ff83d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b3b0a6ea0da131c9e8e03fda5d358848fdca2ac3229875d2ac3f5489654604e = $this->env->getExtension("native_profiler");
        $__internal_3b3b0a6ea0da131c9e8e03fda5d358848fdca2ac3229875d2ac3f5489654604e->enter($__internal_3b3b0a6ea0da131c9e8e03fda5d358848fdca2ac3229875d2ac3f5489654604e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3b3b0a6ea0da131c9e8e03fda5d358848fdca2ac3229875d2ac3f5489654604e->leave($__internal_3b3b0a6ea0da131c9e8e03fda5d358848fdca2ac3229875d2ac3f5489654604e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6916e2792cd3a089f015b95e725a80af1b17ca887d5c11927250d5a42cfc53a5 = $this->env->getExtension("native_profiler");
        $__internal_6916e2792cd3a089f015b95e725a80af1b17ca887d5c11927250d5a42cfc53a5->enter($__internal_6916e2792cd3a089f015b95e725a80af1b17ca887d5c11927250d5a42cfc53a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6916e2792cd3a089f015b95e725a80af1b17ca887d5c11927250d5a42cfc53a5->leave($__internal_6916e2792cd3a089f015b95e725a80af1b17ca887d5c11927250d5a42cfc53a5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21bcb0f436b8da66d010ecbd41ab0e1542a35156190767c9a0df38bf15ad25cd = $this->env->getExtension("native_profiler");
        $__internal_21bcb0f436b8da66d010ecbd41ab0e1542a35156190767c9a0df38bf15ad25cd->enter($__internal_21bcb0f436b8da66d010ecbd41ab0e1542a35156190767c9a0df38bf15ad25cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_21bcb0f436b8da66d010ecbd41ab0e1542a35156190767c9a0df38bf15ad25cd->leave($__internal_21bcb0f436b8da66d010ecbd41ab0e1542a35156190767c9a0df38bf15ad25cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
