<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54234b1ebe8ce7d3a7dcbfcc334e52a20ee570d2a1127c371b232407937f69c2 extends Twig_Template
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
        $__internal_0805c2b84761f4acdbdf396785f0463494e933bd7957d5ed221604d95ca5e2bc = $this->env->getExtension("native_profiler");
        $__internal_0805c2b84761f4acdbdf396785f0463494e933bd7957d5ed221604d95ca5e2bc->enter($__internal_0805c2b84761f4acdbdf396785f0463494e933bd7957d5ed221604d95ca5e2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0805c2b84761f4acdbdf396785f0463494e933bd7957d5ed221604d95ca5e2bc->leave($__internal_0805c2b84761f4acdbdf396785f0463494e933bd7957d5ed221604d95ca5e2bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f127e11584cefb47f1f1078f55de486f9097246431077519fbefba013b2d9b2 = $this->env->getExtension("native_profiler");
        $__internal_2f127e11584cefb47f1f1078f55de486f9097246431077519fbefba013b2d9b2->enter($__internal_2f127e11584cefb47f1f1078f55de486f9097246431077519fbefba013b2d9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f127e11584cefb47f1f1078f55de486f9097246431077519fbefba013b2d9b2->leave($__internal_2f127e11584cefb47f1f1078f55de486f9097246431077519fbefba013b2d9b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d968b93714237826da470a911efa8c9071b65b65714cb0cd7b35648ea8de1a7 = $this->env->getExtension("native_profiler");
        $__internal_7d968b93714237826da470a911efa8c9071b65b65714cb0cd7b35648ea8de1a7->enter($__internal_7d968b93714237826da470a911efa8c9071b65b65714cb0cd7b35648ea8de1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d968b93714237826da470a911efa8c9071b65b65714cb0cd7b35648ea8de1a7->leave($__internal_7d968b93714237826da470a911efa8c9071b65b65714cb0cd7b35648ea8de1a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74161d00915253cec9e76e19c2f1d68bfc6227aa12bbd80d63e85e814ca747de = $this->env->getExtension("native_profiler");
        $__internal_74161d00915253cec9e76e19c2f1d68bfc6227aa12bbd80d63e85e814ca747de->enter($__internal_74161d00915253cec9e76e19c2f1d68bfc6227aa12bbd80d63e85e814ca747de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_74161d00915253cec9e76e19c2f1d68bfc6227aa12bbd80d63e85e814ca747de->leave($__internal_74161d00915253cec9e76e19c2f1d68bfc6227aa12bbd80d63e85e814ca747de_prof);

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
