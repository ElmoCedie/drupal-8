<?php

/* themes/UnionBankTest/templates/layout/page.html.twig */
class __TwigTemplate_ce17066bcd98f8c753d336604d9a471dcedefdcb461e7495edea9d76e07e9a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<header>

  <div class=\"navbar navbar-default navbar-fixed-top\">
    <a href=\"/\">
      <img id=\"nav-logo\" src=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . "themes/UnionBankTest/images/union-logo.png"), "html", null, true));
        echo "\"/>
    </a>
    <div class=\"nav navbar-nav navbar-custom navbar-right\">
      ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
    </div>
  </div>

</header>

";
        // line 14
        if (($context["is_front"] ?? null)) {
            // line 15
            echo "  <div class=\"banner-container\">
    <img class=\"banner-image\" src=\"";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . "themes/UnionBankTest/images/debitpage-banner.jpg"), "html", null, true));
            echo "\"/>
  </div>
";
        }
        // line 19
        echo "
<div id=\"content_sub_menu\">
  ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_Navbar", array()), "html", null, true));
        echo "
</div>

<div class=\"container\">
  <main>
    <div class=\"row\" id=\"main-content\">
      <div class=\"col-lg-10\">
        <div class=\"container\">

          ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        </div>
      </div>
      ";
        // line 35
        echo "    </div>
    #}
  </div>
</main>
</div>

<footer id=\"footer\">
<div class=\"content container\">
  <a href=\"/\">
    <img src=\"";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . "themes/UnionBankTest/images/union-logo.png"), "html", null, true));
        echo "\"/>
  </a>
  <div class=\"row\">
    ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
  </div>
  <div class=\"note\">
    <p>UnionBank of the Philippines is an entity regulated by the Bangko Sentral ng Pilipinas. For inquiries and comments, please contact our 24-Hour Customer Service at (+632) 841-8600 for Metro Manila; 1-800-1888-2277 for PLDT domestic toll-free calls;
      and (IAC) + 800-8277-2273 for international toll-free calls, or send us an email at customer.service@unionbankph.com.
    </p>
    <p>
      You may also contact the BSP-Financial Consumer Protection Department (FCPD) at (02) 708-7087 or consumeraffairs@bsp.gov.ph. UnionBank of the Philippines is located at UnionBank Plaza Meralco Ave cor. Onyx and Sapphire Rds, Ortigas Center, Pasig,
      Philippines.
    </p>
  </div>
</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/UnionBankTest/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  108 => 44,  97 => 35,  91 => 30,  79 => 21,  75 => 19,  69 => 16,  66 => 15,  64 => 14,  55 => 8,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/UnionBankTest/templates/layout/page.html.twig", "/Users/cedrick/Sites/drupal-8/themes/UnionBankTest/templates/layout/page.html.twig");
    }
}
