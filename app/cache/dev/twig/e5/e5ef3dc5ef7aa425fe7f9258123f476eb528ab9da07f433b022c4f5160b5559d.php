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
        $__internal_e142089d8d1026ec9b00efbd679fbf951901d9033ddde3d28de1bc72fc1641bd = $this->env->getExtension("native_profiler");
        $__internal_e142089d8d1026ec9b00efbd679fbf951901d9033ddde3d28de1bc72fc1641bd->enter($__internal_e142089d8d1026ec9b00efbd679fbf951901d9033ddde3d28de1bc72fc1641bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e142089d8d1026ec9b00efbd679fbf951901d9033ddde3d28de1bc72fc1641bd->leave($__internal_e142089d8d1026ec9b00efbd679fbf951901d9033ddde3d28de1bc72fc1641bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d0f8e1e74e2cccf1f7e7498b36e72b314e40f82c6662ef89d77e150077666ac = $this->env->getExtension("native_profiler");
        $__internal_7d0f8e1e74e2cccf1f7e7498b36e72b314e40f82c6662ef89d77e150077666ac->enter($__internal_7d0f8e1e74e2cccf1f7e7498b36e72b314e40f82c6662ef89d77e150077666ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7d0f8e1e74e2cccf1f7e7498b36e72b314e40f82c6662ef89d77e150077666ac->leave($__internal_7d0f8e1e74e2cccf1f7e7498b36e72b314e40f82c6662ef89d77e150077666ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d018ce097405580604efd72c6fc72c3c2c0b7423e0ceaaf48ecf341ddd3460c = $this->env->getExtension("native_profiler");
        $__internal_6d018ce097405580604efd72c6fc72c3c2c0b7423e0ceaaf48ecf341ddd3460c->enter($__internal_6d018ce097405580604efd72c6fc72c3c2c0b7423e0ceaaf48ecf341ddd3460c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d018ce097405580604efd72c6fc72c3c2c0b7423e0ceaaf48ecf341ddd3460c->leave($__internal_6d018ce097405580604efd72c6fc72c3c2c0b7423e0ceaaf48ecf341ddd3460c_prof);

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
