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
        $__internal_5a865ad8b1f2715c9f3194fc506f7a7ce39a4148c7bbe7d10ad18380e651b9d4 = $this->env->getExtension("native_profiler");
        $__internal_5a865ad8b1f2715c9f3194fc506f7a7ce39a4148c7bbe7d10ad18380e651b9d4->enter($__internal_5a865ad8b1f2715c9f3194fc506f7a7ce39a4148c7bbe7d10ad18380e651b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a865ad8b1f2715c9f3194fc506f7a7ce39a4148c7bbe7d10ad18380e651b9d4->leave($__internal_5a865ad8b1f2715c9f3194fc506f7a7ce39a4148c7bbe7d10ad18380e651b9d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c56b88a3b57bc4d8bb587a528808ad67a50703851b71c992f5cb769bbcfbc09f = $this->env->getExtension("native_profiler");
        $__internal_c56b88a3b57bc4d8bb587a528808ad67a50703851b71c992f5cb769bbcfbc09f->enter($__internal_c56b88a3b57bc4d8bb587a528808ad67a50703851b71c992f5cb769bbcfbc09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c56b88a3b57bc4d8bb587a528808ad67a50703851b71c992f5cb769bbcfbc09f->leave($__internal_c56b88a3b57bc4d8bb587a528808ad67a50703851b71c992f5cb769bbcfbc09f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_76561524afc867644da49b67f99525af056ba4f8d7b27477163ca925eac741ef = $this->env->getExtension("native_profiler");
        $__internal_76561524afc867644da49b67f99525af056ba4f8d7b27477163ca925eac741ef->enter($__internal_76561524afc867644da49b67f99525af056ba4f8d7b27477163ca925eac741ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_76561524afc867644da49b67f99525af056ba4f8d7b27477163ca925eac741ef->leave($__internal_76561524afc867644da49b67f99525af056ba4f8d7b27477163ca925eac741ef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48e3d52eebaad38dfae0ff90aaf9a79301c546888a790bf7bcc3c7beb4217a57 = $this->env->getExtension("native_profiler");
        $__internal_48e3d52eebaad38dfae0ff90aaf9a79301c546888a790bf7bcc3c7beb4217a57->enter($__internal_48e3d52eebaad38dfae0ff90aaf9a79301c546888a790bf7bcc3c7beb4217a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_48e3d52eebaad38dfae0ff90aaf9a79301c546888a790bf7bcc3c7beb4217a57->leave($__internal_48e3d52eebaad38dfae0ff90aaf9a79301c546888a790bf7bcc3c7beb4217a57_prof);

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
