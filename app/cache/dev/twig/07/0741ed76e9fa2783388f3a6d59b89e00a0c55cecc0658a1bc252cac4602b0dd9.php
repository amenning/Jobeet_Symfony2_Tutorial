<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9070871fd559bba25e49457e0cba38462f72698cd9a825d67a43b21ecf92665f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_48c5821953f3f1d0c00ac151bf548e978e08cfbe30706cb2ec4e88cb24fbaef2 = $this->env->getExtension("native_profiler");
        $__internal_48c5821953f3f1d0c00ac151bf548e978e08cfbe30706cb2ec4e88cb24fbaef2->enter($__internal_48c5821953f3f1d0c00ac151bf548e978e08cfbe30706cb2ec4e88cb24fbaef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48c5821953f3f1d0c00ac151bf548e978e08cfbe30706cb2ec4e88cb24fbaef2->leave($__internal_48c5821953f3f1d0c00ac151bf548e978e08cfbe30706cb2ec4e88cb24fbaef2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f2ac74c79f5aee77fd9d514ca939596d4ffda32a63afcd79698b8660d143f35 = $this->env->getExtension("native_profiler");
        $__internal_7f2ac74c79f5aee77fd9d514ca939596d4ffda32a63afcd79698b8660d143f35->enter($__internal_7f2ac74c79f5aee77fd9d514ca939596d4ffda32a63afcd79698b8660d143f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7f2ac74c79f5aee77fd9d514ca939596d4ffda32a63afcd79698b8660d143f35->leave($__internal_7f2ac74c79f5aee77fd9d514ca939596d4ffda32a63afcd79698b8660d143f35_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c4241a1c6969194e1c963213799c4384967ba3cdca623c3ffd21f482f4713be = $this->env->getExtension("native_profiler");
        $__internal_1c4241a1c6969194e1c963213799c4384967ba3cdca623c3ffd21f482f4713be->enter($__internal_1c4241a1c6969194e1c963213799c4384967ba3cdca623c3ffd21f482f4713be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1c4241a1c6969194e1c963213799c4384967ba3cdca623c3ffd21f482f4713be->leave($__internal_1c4241a1c6969194e1c963213799c4384967ba3cdca623c3ffd21f482f4713be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
