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
        $__internal_d96cb9b27b379991e6cb47048ee2a17582c80b7ee9164fd9e10f28a953d0a0c8 = $this->env->getExtension("native_profiler");
        $__internal_d96cb9b27b379991e6cb47048ee2a17582c80b7ee9164fd9e10f28a953d0a0c8->enter($__internal_d96cb9b27b379991e6cb47048ee2a17582c80b7ee9164fd9e10f28a953d0a0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96cb9b27b379991e6cb47048ee2a17582c80b7ee9164fd9e10f28a953d0a0c8->leave($__internal_d96cb9b27b379991e6cb47048ee2a17582c80b7ee9164fd9e10f28a953d0a0c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7961fd37329a21a76bf609f59051e8a1dc6663933e348c6cda4848c15ca5b46 = $this->env->getExtension("native_profiler");
        $__internal_d7961fd37329a21a76bf609f59051e8a1dc6663933e348c6cda4848c15ca5b46->enter($__internal_d7961fd37329a21a76bf609f59051e8a1dc6663933e348c6cda4848c15ca5b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d7961fd37329a21a76bf609f59051e8a1dc6663933e348c6cda4848c15ca5b46->leave($__internal_d7961fd37329a21a76bf609f59051e8a1dc6663933e348c6cda4848c15ca5b46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91e8d6b3a6feafa5a7469cba7797f315a64b2f60b0b10ff41b8c13865072bf8e = $this->env->getExtension("native_profiler");
        $__internal_91e8d6b3a6feafa5a7469cba7797f315a64b2f60b0b10ff41b8c13865072bf8e->enter($__internal_91e8d6b3a6feafa5a7469cba7797f315a64b2f60b0b10ff41b8c13865072bf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_91e8d6b3a6feafa5a7469cba7797f315a64b2f60b0b10ff41b8c13865072bf8e->leave($__internal_91e8d6b3a6feafa5a7469cba7797f315a64b2f60b0b10ff41b8c13865072bf8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_20d74ca7e930cb55a8372e6218f9da1988ed42aeb7291b993f33d38c763fc8c2 = $this->env->getExtension("native_profiler");
        $__internal_20d74ca7e930cb55a8372e6218f9da1988ed42aeb7291b993f33d38c763fc8c2->enter($__internal_20d74ca7e930cb55a8372e6218f9da1988ed42aeb7291b993f33d38c763fc8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_20d74ca7e930cb55a8372e6218f9da1988ed42aeb7291b993f33d38c763fc8c2->leave($__internal_20d74ca7e930cb55a8372e6218f9da1988ed42aeb7291b993f33d38c763fc8c2_prof);

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
