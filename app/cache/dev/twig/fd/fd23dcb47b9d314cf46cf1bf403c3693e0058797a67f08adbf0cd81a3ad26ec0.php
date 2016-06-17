<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b8693eb806b3b66d5de21741ec3597634f91b97306671084859ad7e5d4751996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81c325a6d8fbe52fe97912c8a5559b03da7c32a2a37618cbadd65fea34e15972 = $this->env->getExtension("native_profiler");
        $__internal_81c325a6d8fbe52fe97912c8a5559b03da7c32a2a37618cbadd65fea34e15972->enter($__internal_81c325a6d8fbe52fe97912c8a5559b03da7c32a2a37618cbadd65fea34e15972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81c325a6d8fbe52fe97912c8a5559b03da7c32a2a37618cbadd65fea34e15972->leave($__internal_81c325a6d8fbe52fe97912c8a5559b03da7c32a2a37618cbadd65fea34e15972_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da5e77d84c62d38d82b1345a327908a90bd4c8cd6e1d5154731caafa2b84d53b = $this->env->getExtension("native_profiler");
        $__internal_da5e77d84c62d38d82b1345a327908a90bd4c8cd6e1d5154731caafa2b84d53b->enter($__internal_da5e77d84c62d38d82b1345a327908a90bd4c8cd6e1d5154731caafa2b84d53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_da5e77d84c62d38d82b1345a327908a90bd4c8cd6e1d5154731caafa2b84d53b->leave($__internal_da5e77d84c62d38d82b1345a327908a90bd4c8cd6e1d5154731caafa2b84d53b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6dffac267d8fe03c28dcadc3881df5230020833ff643afdce5305686cc9324e2 = $this->env->getExtension("native_profiler");
        $__internal_6dffac267d8fe03c28dcadc3881df5230020833ff643afdce5305686cc9324e2->enter($__internal_6dffac267d8fe03c28dcadc3881df5230020833ff643afdce5305686cc9324e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6dffac267d8fe03c28dcadc3881df5230020833ff643afdce5305686cc9324e2->leave($__internal_6dffac267d8fe03c28dcadc3881df5230020833ff643afdce5305686cc9324e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27ed17979637615fd16de0be0fefc2eebe4e2e14a14c47f9af3fe5479464dd36 = $this->env->getExtension("native_profiler");
        $__internal_27ed17979637615fd16de0be0fefc2eebe4e2e14a14c47f9af3fe5479464dd36->enter($__internal_27ed17979637615fd16de0be0fefc2eebe4e2e14a14c47f9af3fe5479464dd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27ed17979637615fd16de0be0fefc2eebe4e2e14a14c47f9af3fe5479464dd36->leave($__internal_27ed17979637615fd16de0be0fefc2eebe4e2e14a14c47f9af3fe5479464dd36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
