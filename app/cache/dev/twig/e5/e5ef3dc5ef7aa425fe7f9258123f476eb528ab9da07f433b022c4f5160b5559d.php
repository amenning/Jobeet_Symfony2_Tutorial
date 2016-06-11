<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c87de4d8e6686f86cac93fe8d9df598dd57998ab64a5ca48666e5cef81b22526 extends Twig_Template
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
        $__internal_f49f4b295c79a8f5678dba96ec9d398a1620d11217d92f86f36493de948dbb14 = $this->env->getExtension("native_profiler");
        $__internal_f49f4b295c79a8f5678dba96ec9d398a1620d11217d92f86f36493de948dbb14->enter($__internal_f49f4b295c79a8f5678dba96ec9d398a1620d11217d92f86f36493de948dbb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49f4b295c79a8f5678dba96ec9d398a1620d11217d92f86f36493de948dbb14->leave($__internal_f49f4b295c79a8f5678dba96ec9d398a1620d11217d92f86f36493de948dbb14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af37fb96483cd8d4d76bb5fa14f69b76d0ae3a980cff850ac9a702026512619c = $this->env->getExtension("native_profiler");
        $__internal_af37fb96483cd8d4d76bb5fa14f69b76d0ae3a980cff850ac9a702026512619c->enter($__internal_af37fb96483cd8d4d76bb5fa14f69b76d0ae3a980cff850ac9a702026512619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_af37fb96483cd8d4d76bb5fa14f69b76d0ae3a980cff850ac9a702026512619c->leave($__internal_af37fb96483cd8d4d76bb5fa14f69b76d0ae3a980cff850ac9a702026512619c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_47f6e765c9e6bd85d7a403bd68158fb859d4a2f3491fc8b17626c5d1757730d3 = $this->env->getExtension("native_profiler");
        $__internal_47f6e765c9e6bd85d7a403bd68158fb859d4a2f3491fc8b17626c5d1757730d3->enter($__internal_47f6e765c9e6bd85d7a403bd68158fb859d4a2f3491fc8b17626c5d1757730d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47f6e765c9e6bd85d7a403bd68158fb859d4a2f3491fc8b17626c5d1757730d3->leave($__internal_47f6e765c9e6bd85d7a403bd68158fb859d4a2f3491fc8b17626c5d1757730d3_prof);

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
