<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_79e0ae89bd2a74e65a21829a77e371eb1fdb0b7b94ec0087fc9e4f557bc5f4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_bd0562a6ad38c59e2991cb6ea091da95f5d8712c8678c118e904a2d7f68bc38a = $this->env->getExtension("native_profiler");
        $__internal_bd0562a6ad38c59e2991cb6ea091da95f5d8712c8678c118e904a2d7f68bc38a->enter($__internal_bd0562a6ad38c59e2991cb6ea091da95f5d8712c8678c118e904a2d7f68bc38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0562a6ad38c59e2991cb6ea091da95f5d8712c8678c118e904a2d7f68bc38a->leave($__internal_bd0562a6ad38c59e2991cb6ea091da95f5d8712c8678c118e904a2d7f68bc38a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17e66f39ba329a312b912be718e0dbc65d1c6464026d4fc5a4ea879ac967607b = $this->env->getExtension("native_profiler");
        $__internal_17e66f39ba329a312b912be718e0dbc65d1c6464026d4fc5a4ea879ac967607b->enter($__internal_17e66f39ba329a312b912be718e0dbc65d1c6464026d4fc5a4ea879ac967607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_17e66f39ba329a312b912be718e0dbc65d1c6464026d4fc5a4ea879ac967607b->leave($__internal_17e66f39ba329a312b912be718e0dbc65d1c6464026d4fc5a4ea879ac967607b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d15775c87be7c05681c03d9e6486c7bef5910b29e8a751fd24a7498dc53fb79e = $this->env->getExtension("native_profiler");
        $__internal_d15775c87be7c05681c03d9e6486c7bef5910b29e8a751fd24a7498dc53fb79e->enter($__internal_d15775c87be7c05681c03d9e6486c7bef5910b29e8a751fd24a7498dc53fb79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d15775c87be7c05681c03d9e6486c7bef5910b29e8a751fd24a7498dc53fb79e->leave($__internal_d15775c87be7c05681c03d9e6486c7bef5910b29e8a751fd24a7498dc53fb79e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
