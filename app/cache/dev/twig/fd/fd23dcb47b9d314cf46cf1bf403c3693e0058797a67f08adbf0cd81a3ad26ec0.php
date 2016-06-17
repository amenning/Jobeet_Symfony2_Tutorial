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
        $__internal_14fc4088de566ceb218d9f604bc305bd7d0c42c77f9e4c218a23431b47797f31 = $this->env->getExtension("native_profiler");
        $__internal_14fc4088de566ceb218d9f604bc305bd7d0c42c77f9e4c218a23431b47797f31->enter($__internal_14fc4088de566ceb218d9f604bc305bd7d0c42c77f9e4c218a23431b47797f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14fc4088de566ceb218d9f604bc305bd7d0c42c77f9e4c218a23431b47797f31->leave($__internal_14fc4088de566ceb218d9f604bc305bd7d0c42c77f9e4c218a23431b47797f31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24c322db57818b6c86f8cc87c852b4aa828a8b8c479fe4199d72cba54398bd7e = $this->env->getExtension("native_profiler");
        $__internal_24c322db57818b6c86f8cc87c852b4aa828a8b8c479fe4199d72cba54398bd7e->enter($__internal_24c322db57818b6c86f8cc87c852b4aa828a8b8c479fe4199d72cba54398bd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24c322db57818b6c86f8cc87c852b4aa828a8b8c479fe4199d72cba54398bd7e->leave($__internal_24c322db57818b6c86f8cc87c852b4aa828a8b8c479fe4199d72cba54398bd7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ddbefaaaabd5fc8c91e49db80e41a5311286f166ca073a8c88bafd2437892e3 = $this->env->getExtension("native_profiler");
        $__internal_4ddbefaaaabd5fc8c91e49db80e41a5311286f166ca073a8c88bafd2437892e3->enter($__internal_4ddbefaaaabd5fc8c91e49db80e41a5311286f166ca073a8c88bafd2437892e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ddbefaaaabd5fc8c91e49db80e41a5311286f166ca073a8c88bafd2437892e3->leave($__internal_4ddbefaaaabd5fc8c91e49db80e41a5311286f166ca073a8c88bafd2437892e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3184ebb623b94b8ae08b9e5f2694914bbf6130c2f104b5dcca1aa4329b497eb5 = $this->env->getExtension("native_profiler");
        $__internal_3184ebb623b94b8ae08b9e5f2694914bbf6130c2f104b5dcca1aa4329b497eb5->enter($__internal_3184ebb623b94b8ae08b9e5f2694914bbf6130c2f104b5dcca1aa4329b497eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3184ebb623b94b8ae08b9e5f2694914bbf6130c2f104b5dcca1aa4329b497eb5->leave($__internal_3184ebb623b94b8ae08b9e5f2694914bbf6130c2f104b5dcca1aa4329b497eb5_prof);

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
