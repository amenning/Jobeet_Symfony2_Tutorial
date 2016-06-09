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
        $__internal_262cb97194b6a0466b0e56df12974bb2086d7921c98a5f1517a607b9bb0ac9d5 = $this->env->getExtension("native_profiler");
        $__internal_262cb97194b6a0466b0e56df12974bb2086d7921c98a5f1517a607b9bb0ac9d5->enter($__internal_262cb97194b6a0466b0e56df12974bb2086d7921c98a5f1517a607b9bb0ac9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262cb97194b6a0466b0e56df12974bb2086d7921c98a5f1517a607b9bb0ac9d5->leave($__internal_262cb97194b6a0466b0e56df12974bb2086d7921c98a5f1517a607b9bb0ac9d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_461738c751452d805c231bb9e706a1a800ab163e316ab5cfe3d2b8da54d296b3 = $this->env->getExtension("native_profiler");
        $__internal_461738c751452d805c231bb9e706a1a800ab163e316ab5cfe3d2b8da54d296b3->enter($__internal_461738c751452d805c231bb9e706a1a800ab163e316ab5cfe3d2b8da54d296b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_461738c751452d805c231bb9e706a1a800ab163e316ab5cfe3d2b8da54d296b3->leave($__internal_461738c751452d805c231bb9e706a1a800ab163e316ab5cfe3d2b8da54d296b3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_932d434ae5e0afeeb58bfd870bdeaf0f5fecaf1c3b9c247218a5134c13db34b8 = $this->env->getExtension("native_profiler");
        $__internal_932d434ae5e0afeeb58bfd870bdeaf0f5fecaf1c3b9c247218a5134c13db34b8->enter($__internal_932d434ae5e0afeeb58bfd870bdeaf0f5fecaf1c3b9c247218a5134c13db34b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_932d434ae5e0afeeb58bfd870bdeaf0f5fecaf1c3b9c247218a5134c13db34b8->leave($__internal_932d434ae5e0afeeb58bfd870bdeaf0f5fecaf1c3b9c247218a5134c13db34b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_229284c6308b158ac014b493ce6bdc831140ba5a6938c04fc51210d255c56edb = $this->env->getExtension("native_profiler");
        $__internal_229284c6308b158ac014b493ce6bdc831140ba5a6938c04fc51210d255c56edb->enter($__internal_229284c6308b158ac014b493ce6bdc831140ba5a6938c04fc51210d255c56edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_229284c6308b158ac014b493ce6bdc831140ba5a6938c04fc51210d255c56edb->leave($__internal_229284c6308b158ac014b493ce6bdc831140ba5a6938c04fc51210d255c56edb_prof);

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
