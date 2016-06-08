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
        $__internal_faf0c4d5185a4d55e3378b1f9c5053acc4bc3279073617283c2bf0610203bf83 = $this->env->getExtension("native_profiler");
        $__internal_faf0c4d5185a4d55e3378b1f9c5053acc4bc3279073617283c2bf0610203bf83->enter($__internal_faf0c4d5185a4d55e3378b1f9c5053acc4bc3279073617283c2bf0610203bf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf0c4d5185a4d55e3378b1f9c5053acc4bc3279073617283c2bf0610203bf83->leave($__internal_faf0c4d5185a4d55e3378b1f9c5053acc4bc3279073617283c2bf0610203bf83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccd188311d45e749e456048d0a6af098716cd179f5af490bc2480848735e9ab2 = $this->env->getExtension("native_profiler");
        $__internal_ccd188311d45e749e456048d0a6af098716cd179f5af490bc2480848735e9ab2->enter($__internal_ccd188311d45e749e456048d0a6af098716cd179f5af490bc2480848735e9ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ccd188311d45e749e456048d0a6af098716cd179f5af490bc2480848735e9ab2->leave($__internal_ccd188311d45e749e456048d0a6af098716cd179f5af490bc2480848735e9ab2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6702c5a720dbf90db3a9c9a3ff3817e3d3ffd6e75a7e17c3a3e48338824d1f2 = $this->env->getExtension("native_profiler");
        $__internal_e6702c5a720dbf90db3a9c9a3ff3817e3d3ffd6e75a7e17c3a3e48338824d1f2->enter($__internal_e6702c5a720dbf90db3a9c9a3ff3817e3d3ffd6e75a7e17c3a3e48338824d1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6702c5a720dbf90db3a9c9a3ff3817e3d3ffd6e75a7e17c3a3e48338824d1f2->leave($__internal_e6702c5a720dbf90db3a9c9a3ff3817e3d3ffd6e75a7e17c3a3e48338824d1f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_545cba3072b06dfab741f7dc1a63b2df45fbcbe1c6ff34c909e9bc7dff4efba2 = $this->env->getExtension("native_profiler");
        $__internal_545cba3072b06dfab741f7dc1a63b2df45fbcbe1c6ff34c909e9bc7dff4efba2->enter($__internal_545cba3072b06dfab741f7dc1a63b2df45fbcbe1c6ff34c909e9bc7dff4efba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_545cba3072b06dfab741f7dc1a63b2df45fbcbe1c6ff34c909e9bc7dff4efba2->leave($__internal_545cba3072b06dfab741f7dc1a63b2df45fbcbe1c6ff34c909e9bc7dff4efba2_prof);

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
