<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a53df92fd82faf3246feded0683c9fdcf3090a8ccf4caea1122ea06d2f1bf4cc extends Twig_Template
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
        $__internal_d6e34919f91c3fd5a26f9795bb5ea4599ee36def4045ac2d698e515646de46bc = $this->env->getExtension("native_profiler");
        $__internal_d6e34919f91c3fd5a26f9795bb5ea4599ee36def4045ac2d698e515646de46bc->enter($__internal_d6e34919f91c3fd5a26f9795bb5ea4599ee36def4045ac2d698e515646de46bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e34919f91c3fd5a26f9795bb5ea4599ee36def4045ac2d698e515646de46bc->leave($__internal_d6e34919f91c3fd5a26f9795bb5ea4599ee36def4045ac2d698e515646de46bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5affde035272f29626c4377959b5fbc89e8f0a8201364a0a3dcfaae961086f0 = $this->env->getExtension("native_profiler");
        $__internal_f5affde035272f29626c4377959b5fbc89e8f0a8201364a0a3dcfaae961086f0->enter($__internal_f5affde035272f29626c4377959b5fbc89e8f0a8201364a0a3dcfaae961086f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5affde035272f29626c4377959b5fbc89e8f0a8201364a0a3dcfaae961086f0->leave($__internal_f5affde035272f29626c4377959b5fbc89e8f0a8201364a0a3dcfaae961086f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f804b15d3fba8a1aac4ebb6df5426cf27c831feb23f163376700e317f42b590c = $this->env->getExtension("native_profiler");
        $__internal_f804b15d3fba8a1aac4ebb6df5426cf27c831feb23f163376700e317f42b590c->enter($__internal_f804b15d3fba8a1aac4ebb6df5426cf27c831feb23f163376700e317f42b590c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f804b15d3fba8a1aac4ebb6df5426cf27c831feb23f163376700e317f42b590c->leave($__internal_f804b15d3fba8a1aac4ebb6df5426cf27c831feb23f163376700e317f42b590c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_946542fbdea514ca8c299f9b6801963cdefb26a342c93d469182615ae32f3c86 = $this->env->getExtension("native_profiler");
        $__internal_946542fbdea514ca8c299f9b6801963cdefb26a342c93d469182615ae32f3c86->enter($__internal_946542fbdea514ca8c299f9b6801963cdefb26a342c93d469182615ae32f3c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_946542fbdea514ca8c299f9b6801963cdefb26a342c93d469182615ae32f3c86->leave($__internal_946542fbdea514ca8c299f9b6801963cdefb26a342c93d469182615ae32f3c86_prof);

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
