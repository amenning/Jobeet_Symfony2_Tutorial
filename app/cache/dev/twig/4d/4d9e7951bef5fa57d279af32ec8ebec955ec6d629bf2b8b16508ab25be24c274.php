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
        $__internal_1db6878ca0b9416d99fbfe1728aea7c4188dafe68a57f7ccc8d3dcc5f9cacdc1 = $this->env->getExtension("native_profiler");
        $__internal_1db6878ca0b9416d99fbfe1728aea7c4188dafe68a57f7ccc8d3dcc5f9cacdc1->enter($__internal_1db6878ca0b9416d99fbfe1728aea7c4188dafe68a57f7ccc8d3dcc5f9cacdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db6878ca0b9416d99fbfe1728aea7c4188dafe68a57f7ccc8d3dcc5f9cacdc1->leave($__internal_1db6878ca0b9416d99fbfe1728aea7c4188dafe68a57f7ccc8d3dcc5f9cacdc1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c134a5a5181070756ef698fe779ea81fa4dfb9f8732a5a83c7138dd39ad9afdc = $this->env->getExtension("native_profiler");
        $__internal_c134a5a5181070756ef698fe779ea81fa4dfb9f8732a5a83c7138dd39ad9afdc->enter($__internal_c134a5a5181070756ef698fe779ea81fa4dfb9f8732a5a83c7138dd39ad9afdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c134a5a5181070756ef698fe779ea81fa4dfb9f8732a5a83c7138dd39ad9afdc->leave($__internal_c134a5a5181070756ef698fe779ea81fa4dfb9f8732a5a83c7138dd39ad9afdc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b37241f3c223827b6888dc429249e39a67146a39d677c193dd51b7c60b77c969 = $this->env->getExtension("native_profiler");
        $__internal_b37241f3c223827b6888dc429249e39a67146a39d677c193dd51b7c60b77c969->enter($__internal_b37241f3c223827b6888dc429249e39a67146a39d677c193dd51b7c60b77c969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b37241f3c223827b6888dc429249e39a67146a39d677c193dd51b7c60b77c969->leave($__internal_b37241f3c223827b6888dc429249e39a67146a39d677c193dd51b7c60b77c969_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcbca97fcb8bddc058c94fac9697fa71fe0fac7c5b983dd69c3eb62020446527 = $this->env->getExtension("native_profiler");
        $__internal_bcbca97fcb8bddc058c94fac9697fa71fe0fac7c5b983dd69c3eb62020446527->enter($__internal_bcbca97fcb8bddc058c94fac9697fa71fe0fac7c5b983dd69c3eb62020446527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bcbca97fcb8bddc058c94fac9697fa71fe0fac7c5b983dd69c3eb62020446527->leave($__internal_bcbca97fcb8bddc058c94fac9697fa71fe0fac7c5b983dd69c3eb62020446527_prof);

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
