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
        $__internal_1c79093c5c2266c9606d68984c37946717d561542406f8061492bd952c1bf682 = $this->env->getExtension("native_profiler");
        $__internal_1c79093c5c2266c9606d68984c37946717d561542406f8061492bd952c1bf682->enter($__internal_1c79093c5c2266c9606d68984c37946717d561542406f8061492bd952c1bf682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c79093c5c2266c9606d68984c37946717d561542406f8061492bd952c1bf682->leave($__internal_1c79093c5c2266c9606d68984c37946717d561542406f8061492bd952c1bf682_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe1e609fcdf51fcb1ac78dcc99b2d8d137be39130d03959e83463038154cbe25 = $this->env->getExtension("native_profiler");
        $__internal_fe1e609fcdf51fcb1ac78dcc99b2d8d137be39130d03959e83463038154cbe25->enter($__internal_fe1e609fcdf51fcb1ac78dcc99b2d8d137be39130d03959e83463038154cbe25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe1e609fcdf51fcb1ac78dcc99b2d8d137be39130d03959e83463038154cbe25->leave($__internal_fe1e609fcdf51fcb1ac78dcc99b2d8d137be39130d03959e83463038154cbe25_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8043ad30344920b23b4cf640d9a985fad8913fd6538311d76635816313980263 = $this->env->getExtension("native_profiler");
        $__internal_8043ad30344920b23b4cf640d9a985fad8913fd6538311d76635816313980263->enter($__internal_8043ad30344920b23b4cf640d9a985fad8913fd6538311d76635816313980263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8043ad30344920b23b4cf640d9a985fad8913fd6538311d76635816313980263->leave($__internal_8043ad30344920b23b4cf640d9a985fad8913fd6538311d76635816313980263_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdc375cba9f7a9cfa23fa1786dd13668f0934502f2073671c1aff436bded45ce = $this->env->getExtension("native_profiler");
        $__internal_fdc375cba9f7a9cfa23fa1786dd13668f0934502f2073671c1aff436bded45ce->enter($__internal_fdc375cba9f7a9cfa23fa1786dd13668f0934502f2073671c1aff436bded45ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fdc375cba9f7a9cfa23fa1786dd13668f0934502f2073671c1aff436bded45ce->leave($__internal_fdc375cba9f7a9cfa23fa1786dd13668f0934502f2073671c1aff436bded45ce_prof);

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
