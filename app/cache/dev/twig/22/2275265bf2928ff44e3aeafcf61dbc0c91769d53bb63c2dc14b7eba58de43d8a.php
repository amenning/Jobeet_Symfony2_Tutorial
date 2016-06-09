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
        $__internal_70042511fde3225b44bf7e3d93d77e73d88a40cb6be1bb9863a275feca034f9f = $this->env->getExtension("native_profiler");
        $__internal_70042511fde3225b44bf7e3d93d77e73d88a40cb6be1bb9863a275feca034f9f->enter($__internal_70042511fde3225b44bf7e3d93d77e73d88a40cb6be1bb9863a275feca034f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70042511fde3225b44bf7e3d93d77e73d88a40cb6be1bb9863a275feca034f9f->leave($__internal_70042511fde3225b44bf7e3d93d77e73d88a40cb6be1bb9863a275feca034f9f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b491e48b679886606e93778d57487b3041f9b0b0b6499c1ed5a72bbfff57066 = $this->env->getExtension("native_profiler");
        $__internal_4b491e48b679886606e93778d57487b3041f9b0b0b6499c1ed5a72bbfff57066->enter($__internal_4b491e48b679886606e93778d57487b3041f9b0b0b6499c1ed5a72bbfff57066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b491e48b679886606e93778d57487b3041f9b0b0b6499c1ed5a72bbfff57066->leave($__internal_4b491e48b679886606e93778d57487b3041f9b0b0b6499c1ed5a72bbfff57066_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ec15c2f738ce176312da99def949f152a86e7b8fb897ad88f56e44c21fb3393 = $this->env->getExtension("native_profiler");
        $__internal_8ec15c2f738ce176312da99def949f152a86e7b8fb897ad88f56e44c21fb3393->enter($__internal_8ec15c2f738ce176312da99def949f152a86e7b8fb897ad88f56e44c21fb3393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ec15c2f738ce176312da99def949f152a86e7b8fb897ad88f56e44c21fb3393->leave($__internal_8ec15c2f738ce176312da99def949f152a86e7b8fb897ad88f56e44c21fb3393_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30837ee7d9096c9267bece5f72484498094a8259469fddaf25e910ba54cf4c25 = $this->env->getExtension("native_profiler");
        $__internal_30837ee7d9096c9267bece5f72484498094a8259469fddaf25e910ba54cf4c25->enter($__internal_30837ee7d9096c9267bece5f72484498094a8259469fddaf25e910ba54cf4c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_30837ee7d9096c9267bece5f72484498094a8259469fddaf25e910ba54cf4c25->leave($__internal_30837ee7d9096c9267bece5f72484498094a8259469fddaf25e910ba54cf4c25_prof);

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
